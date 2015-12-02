<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CodeCommerce\Product::truncate();

        factory('CodeCommerce\Product', 10)->create();
    }
}
