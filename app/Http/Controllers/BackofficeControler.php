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

        $menus = MealCategoryResource::collection(MealCategory::all());

        return view('dashboard')
            ->with([
                'name' => $user->name,
                'email' => $user->email,
                'menus' => $menus,
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

    function update_season_menu(Request $request): RedirectResponse
    {
        //TODO: request validation
        $category = MealCategory::findOrFail($request->meal_category_id);
        $category->meals()->delete();

        foreach ($request->meals as $meal) {
            $category->meals()->create([
                'title' => $meal['title'],
                'description' => $meal['description'],
                'price' => $meal['price'],
            ]);
        }

        return redirect()
            ->back()
            ->with([
                'success' => 'update menu successfully'
            ]);
    }
}
