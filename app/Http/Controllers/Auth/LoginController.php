<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $this->redirectTo = RouteServiceProvider::ADMIN;
        } elseif (Auth::check() && Auth::user()->role == 'employer') {
            return $this->redirectTo = RouteServiceProvider::EMPLOYER;
        } elseif (Auth::check() && Auth::user()->role == 'seeker') {
            return $this->redirectTo = RouteServiceProvider::SEEKER;
        }
    }
}
