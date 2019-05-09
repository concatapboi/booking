<?php

namespace App\Modules\Backend\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\HotelManager;

class ManagerRedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'manager')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('admin/login.html');
        }
        $id = Auth::guard($guard)->user()->id;
        if(!User::find($id)->isHotelManager($id)){
          return redirect('admin/login.html');
        }
        return $next($request);
    }
}
