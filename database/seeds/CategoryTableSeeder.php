<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CodeCommerce\Category::truncate();

        factory('CodeCommerce\Category', 10)->create();
    }
}
