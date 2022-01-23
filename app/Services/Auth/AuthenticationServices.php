<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationServices
{
    public function registerPage()
    {
        return view('auth.register');
    }
    public function loginPage()
    {
        return view('auth.login');
    }

    public function registered($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
//            'phone_number' => 'required',
//            'role_id' => 'required',
//            'image' => 'required',
        ]);
        if ($validator->fails()) {

            return response()->json(['status' => 0, 'message' => $validator->messages()->first()], 200);

        }

        $user = User::create($request->except('password') + ['password' => bcrypt($request->password)]);

        return response()->json(['status' => 1, 'message' => "Register Successfully",'url'=>route('loginPage')], 200);

    }

    public function doLogin($request)
    {
        $validator = Validator::make($request->all(), [

            'email' => 'required|email',
            "password" => "required|min:8",

        ]);
        if ($validator->fails()) {

            return response()->json(['status' => 0, 'message' => $validator->messages()->first()], 200);

        }


        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

            return response()->json(['status' => 1, 'message' => "Login Successfully",'url'=> route('dashBoard')], 200);


        } else {
            return response()->json(['status' => 0, 'message' => "Invalid Login Credentials"], 200);

        }
    }

    public function dashBoard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect(route('loginPage'));

    }

    public function logout($request)
    {
         $response = session()->invalidate();
        if(!$response){
            $response = session()->invalidate();
        }
        return redirect(route('loginPage'));

    }

}

