<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the user's database.
     */
    public function run():void
    {
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'nickname' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'admin' => true,
            'approved' => true,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Operator',
            'nickname' => 'operator',
            'email' => 'operator@operator.com',
            'password' => bcrypt('123456'),
            'admin' => false,
            'approved' => true,
        ]);
    }
}