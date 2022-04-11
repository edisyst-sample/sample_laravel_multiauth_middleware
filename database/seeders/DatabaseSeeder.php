<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'is_admin' => 1,
            'password' => Hash::make('admin'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Simple user',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'is_admin' => 0,
            'password' => Hash::make('user'),
        ]);

        \App\Models\User::factory(10)->create();
    }
}
