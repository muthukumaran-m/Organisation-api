<?php

namespace Database\Seeders;

use App\Models\Organisation;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Role::insert(
            [[
                'name' => 'Admin',
                'detail' => 'Admin',
            ], [
                'name' => 'User',
                'detail' => 'User',
            ]]
        );

        Organisation::insert(
            [[
                'name' => 'Google',
                'detail' => 'Google',
            ], [
                'name' => 'Yaahoo',
                'detail' => 'Yaahoo',
            ]]
        );
    }
}
