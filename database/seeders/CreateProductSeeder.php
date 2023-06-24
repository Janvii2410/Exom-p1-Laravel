<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone',
                "price" => "79000",
                "description" => "This My New Iphone",
                "category" =>"Mobile",
                "gallery" =>"android-2018790_1280.jpg"
            ],
            [
                'name' => 'Android',
                "price" => "20000",
                "description" => "This My New Android",
                "category" =>"Mobile",
                "gallery" =>"android-2018790_1280.jpg"
            ],
        ]);
    }
}
