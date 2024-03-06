<?php

namespace App\Http\Controllers\Auth;


use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('/dashboard')->with('success', 'Login successful.');
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid login credentials']);
    }
}
