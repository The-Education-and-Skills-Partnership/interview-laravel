<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Store::create(['name' => 'Gateshead', 'address' => 'Gateshead Address', 'telephone' => '1234567890', 'status' => true]);
        Store::create(['name' => 'Cardiff', 'address' => 'Cardiff Address', 'telephone' => '0987654321', 'status' => true]);
        Store::create(['name' => 'Margate', 'address' => 'Margate Address', 'telephone' => '1112223334', 'status' => true]);
    }
}
