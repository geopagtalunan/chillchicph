<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
            [
                [
                    'product_code' => Str::random(7),
                    'product_name' => 'Bench Velocity',
                    'product_category' => 'Perfume',
                    'created_at' => now()
                ],
                [
                    'product_code' => Str::random(7),
                    'product_name' => 'Ticled Pink',
                    'product_category' => 'Perfume',
                    'created_at' => now()

                ],
            ]
        );
    }
}
