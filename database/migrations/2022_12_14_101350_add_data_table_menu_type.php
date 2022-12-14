<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('menus_types')->insert([
            'name' => 'semaine',
        ]);

        DB::table('menus_types')->insert([
            'name' => 'saison',
        ]);

        DB::table('menus_types')->insert([
            'name' => 'boisson',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
