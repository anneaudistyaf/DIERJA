<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('loginadmin');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->guard()->attempt($credentials)) {
            return redirect('/admin/index');
        } else {
            return redirect('/admin/login')->with('error', 'Login Failed !');
        }
    }

    //logout
    public function logout()
    {
        $this->guard()->logout();
        return redirect('/admin/login');
    }
}
