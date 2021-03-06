<?php

namespace App\Modules\Frontend\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'web')
    {
        if (!Auth::check()) {
            return redirect('/register.html');
        }
        $id = Auth::user()->id;
        if(User::find($id)->isHotelManager($id)){
          return redirect('login.html');
        }
        return $next($request);
    }
}
