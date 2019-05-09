<?php

namespace App\Modules\Backend\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminRedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (!Auth::guard($guard)->check()) {
          $guard ='manager';
          if (!Auth::guard($guard)->check()) {
              return redirect('admin/login.html');
          }
          $id = Auth::guard($guard)->user()->id;
          if(!User::find($id)->isHotelManager($id)){
            return redirect('admin/manager/login.html');
          }else return $next($request);
            return redirect('admin/login.html');
        }
        return $next($request);
    }
}
