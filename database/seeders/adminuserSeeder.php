<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class adminuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\adminuser::Factory(20)->create();
    }
}
