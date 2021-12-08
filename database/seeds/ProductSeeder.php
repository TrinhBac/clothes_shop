<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10;$i++){
            DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => 100000,
            'size' => 1,
            'image' => "https://product.hstatic.net/200000037048/product/0c88b175b99572cb2b84_7b8191b80cea42cb8ae475f4dbd41826_grande.jpg",
            'description' => 'description',
        ]);
        }
    }
}