<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AdminUser;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
	public function login(Request $request)
	{
		$this->validate($request,[
			'captcha' => 'bail|required|captcha',
			'user_name' => 'required|max:100',
			'passwd' => 'required',
		],[
			'captcha.required' => '验证码不能为空',
			'captcha.captcha' => '验证码错误',
			'user_name.required' => '用户名不能为空',
			'user_name.max' => '用户名不合法',
			'passwd.required' => '密码不能为空'
		]);
		$admin_user = new AdminUser;
		$user_name = $request->input('user_name');
		$admin_info = $admin_user->where('name',$user_name)->first();
		if(! $admin_info)
			return redirect('/admin/login');
		$passwd = $request->input('passwd');
		if(! Hash::check($passwd,$admin_info->passwd) ) 
			return redirect('/admin/login');
		$info = $admin_info->toArray();
		unset($info ['passwd']);
		$request->session()->put('admin_info',$info);
		$admin_info->visitor = $request->getClientIp();
		$admin_info->save();
		return redirect('/admin/index');
	}

	public function logout(Request $request)
	{
		/*$AdminUser = new AdminUser();
		$AdminUser->name = 'admin.laolihaile';
		$AdminUser->passwd =  Hash::make('sdDFDf878sdfds923');
		$AdminUser->visitor = $request->getClientIp();
		$AdminUser->save();*/
		$request->session()->flush();
		redirect('/admin/login');
	}
}
