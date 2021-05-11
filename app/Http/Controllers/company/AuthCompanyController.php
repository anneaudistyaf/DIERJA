<?php

namespace App\Http\Controllers\company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\company;
use Exception;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthCompanyController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/company/';
    public function __construct()
    {
        $this->middleware('guest:company')->except('logout');
    }
    public function Showlogin()
    {
        return view('signup');
    }

    protected function guard()
    {
        return Auth::guard('company');
    }
    protected function validatorUser(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }
    public function register(Request $request)
    {
        $this->validatorUser($request->all())->validate();
        try {
            DB::beginTransaction();


            $company = new company;
            $company->company_name = $request->name;
            $company->email_company = $request->email;
            $company->password_company = bcrypt($request->password);

            $company->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            $output = $e->getMessage();
            $validator = $this->validatorUser($request->all())->validate();

            return redirect('/company/register')->with('error_register')->withErrors([$validator]);
        }
        return redirect('/company/')->with('success', 'Register Succes');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->guard()->attempt($credentials)) {
            return redirect('/company/');
        } else {
            return redirect('/company/register')->with('error', 'Login Failed !');
        }
    }

    //logout
    public function logout()
    {
        $this->guard()->logout();
        return redirect('/company/register');
    }
}
