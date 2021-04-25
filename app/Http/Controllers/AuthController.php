<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\address;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return redirect('/signup');
        }
    }
    protected function validatorUser(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }
    // protected function validatorRegister(array $data)
    // {
    //     return Validator::make($data, [
    //         'city' => ['required', 'string', 'max:255'],
    //         'country' => ['required', 'string', 'max:255'],
    //         'postalcode' => ['required', 'string', 'max:255'],
    //         'address' => ['required', 'string', 'max:255'],

    //     ]);
    // }

    //register
    public function register()
    {
        return view('signup');
    }

    public function registerAction(Request $request)
    {

        try {
            DB::beginTransaction();


            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $this->validatorUser($request->all())->validate();

            $user->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            $output = $e->getMessage();
            $validator = $this->validatorUser($request->all())->validate();

            return redirect('/signup')->with('error_register')->withErrors([$validator]);
        }
        return redirect('/signup')->with('success', 'Register Succes');
    }

    //login
    public function login()
    {
        return view('signup');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/pelatihan');
            // dd(Auth::user()->user_id);
        } else {
            return redirect('/signup')->with('error', 'Login Failed !');
        }
    }

    //logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
