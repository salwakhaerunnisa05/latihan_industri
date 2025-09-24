<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    product::create([
        'name' => "basreng",
        'description' => "Basreng enak dan gurih",
        'price' => 3000,
        'stock' => 5000,
    ]);
    }
}
