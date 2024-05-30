<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use App\Http\Resources\MealResource;
use App\Http\Resources\MealCategoryResource;

use App\Models\User;
use App\Models\Meal;
use App\Models\MealCategory;

class BackofficeControler extends Controller
{
    function index()
    {
        $user = User::findOrFail(auth()->user()->id);
        $meals = MealResource::collection(Meal::all());
        $categories = MealCategoryResource::collection(MealCategory::all());

        return view('dashboard')
            ->with([
                'name' => $user->name,
                'email' => $user->email,
                'meals' => $meals,
                'categories' => $categories,
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
