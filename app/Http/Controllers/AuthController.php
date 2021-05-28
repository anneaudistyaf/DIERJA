<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\address;
use App\Models\cv;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return redirect('/register');
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
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);



        // $this->validatorRegister($request->all())->validate();
        if ($validator->fails()) {
            return redirect()->back()->with('error_register', 'register failed')->withErrors($validator);
        }

        try {
            DB::beginTransaction();

            $this->validatorUser($request->all())->validate();

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $id = DB::getPdo()->lastInsertId();
            $user->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            $output = $e->getMessage();
            $validator = $this->validatorUser($request->all())->validate();
            // dd($request->all());
            return redirect('/pelatihan')->with('error_register')->withErrors([$validator]);
        }

        return redirect('User/register')->with('success', 'Register Succes');
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
            return redirect('/');
            // dd(Auth::user()->user_id);
        } else {
            return redirect('User/register')->with('error', 'Login Failed !');
        }
    }

    //logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
