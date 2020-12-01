<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['name'=>'N95 Mask','price'=>199.99,'size'=>'Small','description'=>"LIKHO TUM LOG",'image'=>'masks/mask3']);
        Product::create(['name'=>'N95 Mask','price'=>199.99,'size'=>'Medium','description'=>"LIKHO TUM LOG",'image'=>'masks/mask3']);
        Product::create(['name'=>'N95 Mask','price'=>199.99,'size'=>'Large','description'=>"LIKHO TUM LOG",'image'=>'masks/mask3']);


    }
}
