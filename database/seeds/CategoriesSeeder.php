<?php

use App\Category;
use App\UserDetail;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nama' => 'Islam',
        ]);
        Category::create([
            'nama' => 'Kristen',
        ]);
        Category::create([
            'nama' => 'Khonghucu',
        ]);
        Category::create([
            'nama' => 'Hindu',
        ]);
        Category::create([
            'nama' => 'Budha',
        ]);
    }
}
