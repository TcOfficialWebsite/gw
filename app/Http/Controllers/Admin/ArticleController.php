<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ArticleCategoryModel;
class ArticleController extends Controller
{
	protected $_category;
	public function __construct(ArticleCategoryModel $category)
	{
		$this->_category = $category;
	}

	public function list()
	{
		return view('admin.list');
	}

	/**
	 * 加载视图
	 * @return [type] [description]
	 */
	public function classify()
	{
		$node = $this->_category->orderBy('id','asc')->get();
		$node = $this->_treeNode($node->toArray(),0);
		return view('admin.classify',['list'=>$node]);
	}

	/**
	 * 整理排序所有分类
	 * @param  array   $data  	 从数据库获取的分类
	 * @param  integer $parentId 父id,默认一级分类
	 * @return array 
	 */
	private function _treeNode($data,$parentId = 0)
	{
		$node = [];
		foreach ($data as $key => $value) {
			if($parentId == $value ['pid'])	{
				$node [$key] = $value;
				$node [$key] ['childer'] = $this->_treeNode($data,$value ['id']);
			}
		}
		return $node;
	}

	public function addClassify(Request $request)
	{
		$this->validate(
			$request,
			[
				'name' => 'required|unique:article_category',
				'remark' => 'max:100',
				'pid' => 'required|numeric'
			],
			[
				'name.required' => '请填写分类名！',
				'name.unique' => '改分类名已存在',
				'remark.max' => '分类简介不能超过100个字符',
				'pid.numeric' => '分类id必须为数字'
			]
		);
		$this->_category->name = $request->input('name');
		$this->_category->pid = $request->input('pid',0);
		$this->_category->remark = $request->input('remark');
		$result = $this->_category->save();
		$result = $result ? '操作成功' : '操作失败';
		return back()->with('act_msg',$result);
	}
}
