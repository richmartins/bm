<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Meal::factory(4)->create([
            'title' => 'blablalba',
            'description' => 'le text',
            'price' => '35',
            'id_category' => 1
        ]);

        \App\Models\Meal::factory(6)->create([
            'title' => 'blablalba',
            'description' => 'le text',
            'price' => '35',
            'id_category' => 2
        ]);

        \App\Models\Meal::factory(2)->create([
            'title' => 'blablalba',
            'description' => 'le text',
            'price' => '35',
            'id_category' => 3
        ]);
    }
}
