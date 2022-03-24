<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Iphone',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://images.unsplash.com/photo-1642887276244-db0985cda09a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            ],
            [
                'name'=>'Samsung Tv',
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://images.unsplash.com/photo-1567690187548-f07b1d7bf5a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80"
            ],
            [
                'name'=>'Sony Tv',
                "price"=>"5000",
                "description"=>"Sony DSLR",
                "category"=>"tv",
                "gallery"=>"https://images.unsplash.com/photo-1516035069371-29a1b244cc32?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FtZXJhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://images.unsplash.com/photo-1584568694244-14fbdf83bd30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZnJpZGdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60"
             ]
        ]);
    }
}
