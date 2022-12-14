<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Http\Request;

class BackofficeControler extends Controller
{
    function index()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('dashboard')
            ->with([
                'name' => $user->name,
                'email' => $user->email
            ]);
    }

    function update_menu(Request $request): RedirectResponse
    {
        $request->file('new_menu_semaine')?->storeAs(
            'public/menus', 'semaine.pdf'
        );

        $request->file('new_menu_boissons')?->storeAs(
            'public/menus', 'boissons.pdf'
        );

        return redirect()
            ->back()
            ->with([
                'success' => 'update menu successfully'
            ]);
    }
}
