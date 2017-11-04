<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $uri = $request->path();
        if($request->session()->has('admin_info')) {
            if($uri == 'admin/login') 
                redirect('admin/index');
            return $next($request);
        }else {
            if($uri == 'login_handle' || $uri == 'admin/login' )
                return $next($request);
            return redirect('/admin/login');
        }
    }
}
