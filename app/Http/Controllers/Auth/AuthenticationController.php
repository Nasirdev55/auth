<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\AuthenticationServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('registerPage','loginPage','doLogin','registered');
    }
    public function registerPage(AuthenticationServices $authenticationServices)
    {
        return $authenticationServices->registerPage();
    }
    public function loginPage(AuthenticationServices $authenticationServices)
    {
        return $authenticationServices->loginPage();
    }

    public function registered(Request $request,AuthenticationServices $authenticationServices)
    {
        return $authenticationServices->registered($request);
    }

    public function doLogin(Request $request,AuthenticationServices $authenticationServices)
    {
        return $authenticationServices->doLogin($request);
    }

    public function dashBoard(AuthenticationServices $authenticationServices)
    {

        return $authenticationServices->dashBoard();
    }

    public function logout(Request $request,AuthenticationServices $authenticationServices)
    {
        return $authenticationServices->logout($request);
    }
}
