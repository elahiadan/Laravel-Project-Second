<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::user()->role->name == 'admin') //Auth fetch the login user value...value transfering method...role get value with help of Auth and pass to the role as same as further...please make sure you are added Auth class at the top
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status','You are not allowed to access the Admin Panel // This is a local User Page // Please Login with Admin User // admin@gmail.com // 12345678');
        }

    }

}
