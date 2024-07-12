<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::first()->update([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@mail.com',
        ]);
        $count = 3 - Store::count();
        if ($count > 0) {
            Store::factory($count)->create();
        }
    }
}
