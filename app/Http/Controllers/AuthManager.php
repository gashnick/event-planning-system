<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class AuthManager extends Controller
{
    function login()
    {
        return view('login');
    }

    function signup()
    {
        return view('signup');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('admin.index'));
        }
        return redirect(route('login'))->with("error", "Log in detauls are not valid");
    }

    function signupPost(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:customer_details',
            'password' => 'required'
        ]);

        $data['First_name'] = $request->firstName;
        $data['Last_name'] = $request->lastName;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if (!$user) {
            return redirect(route('signup'))->with("error", "enable to register");
        }
        return redirect(route('login'))->with("success", "Registration successfully, Log in your account");
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
