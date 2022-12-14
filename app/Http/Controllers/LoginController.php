<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function authenticate(Request $request)
    {
        $accred = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($accred)) {
            $request->session()->regenerate();

            return redirect()->intended('backoffice/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
