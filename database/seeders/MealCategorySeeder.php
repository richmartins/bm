<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealCategorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MealCategory::factory()->create([
            'name' => 'entrée'
        ]);
        \App\Models\MealCategory::factory()->create([
            'name' => 'plat'
        ]);
        \App\Models\MealCategory::factory()->create([
            'name' => 'desserts'
        ]);
    }
}
