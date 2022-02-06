<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;  // added Auth class

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;      Removed or Comment this

    // here checking the URL value
    protected function redirectTo()
    {
        if(Auth::user()->role->name == 'admin')  //Auth fetch the login user value...value transfering method...role get value with help of Auth and pass to the role as same as further...please make sure you are added Auth class at the top
        {
            return '/dashboard'; //  return in JSON format
        }
        else
            {
                return 'home';  //  return in JSON format
            }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
