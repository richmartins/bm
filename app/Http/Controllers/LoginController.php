<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        $accred = [
            'name' => $request->username,
            'password' => $request->password
        ];


        if (auth()->attempt($accred)) {
            $request->session()->regenerate();

            return redirect()->intended('backoffice/dashboard');
        }

        return back()->withErrors([
            'accred' => 'Username or password wrong.',
        ])->onlyInput('username');
    }

    public function login(Request $request)
    {
        if (auth()->check()) {
            $request->session()->regenerate();
            return redirect()->intended('backoffice/dashboard');
        }

        return view('auth/login');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password', 'min:8'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
    }

    public function logout(Request $request)
    {
        if (auth()->check()) {
            session()->flush();
            auth()->logout();
            return redirect()->intended('/');
        }

        abort(404);
    }
}
