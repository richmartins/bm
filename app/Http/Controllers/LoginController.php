<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'name' => ['string'],
            'email' => ['email'],
            'current_password' => ['nullable', new MatchOldPassword],
            'new_password' => ['required_if:current_password,string'],
            'new_confirm_password' => ['required_if:new_password,string','same:new_password', 'min:8'],
        ]);

        $user = User::find(auth()->user()->id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with(['success' => 'user updated successfully']);
    }

    public function logout(Request $request)
    {
        if (auth()->check()) {
            session()->flush();
            auth()->logout();
            return redirect()->intended();
        }

        abort(404);
    }
}
