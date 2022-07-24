<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Producto 1',
            'price' => '123.45',
            'tax' => '5'
        ]);

       
        DB::table('products')->insert([
            'name' => 'Producto 2',
            'price' => '45.65',
            'tax' => '15'
        ]);

        DB::table('products')->insert([
            'name' => 'Producto 3',
            'price' => '39.73',
            'tax' => '12'
        ]);

        DB::table('products')->insert([
            'name' => 'Producto 4',
            'price' => '250.00',
            'tax' => '8'
        ]);

        DB::table('products')->insert([
            'name' => 'Producto 5',
            'price' => '59.35',
            'tax' => '10'
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'role' => 'admin',
            'password' => '$2y$10$AqO7NkH9tcMr.IBG7oeMuuhTJo7D7PTrO1xQdYoQdkNKS9Fb7mEKy',
            'created_at' => '2022-07-24 04:46:50',
            'updated_at' => '2022-07-24 04:46:50'
        ]);

    }
}
