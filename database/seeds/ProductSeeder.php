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
            'image' => null,
            'description' => 'description',
        ]);
        }
    }
}
