<?php

use faker\Factory as faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id title slug body image
        $faker = Faker::create('id');
        $title = $faker->sentence;
        $slug = Str::slug($title,'-');
        //$slug = SlugService::createSlug(Berita::class, 'slug', $title);

        for ($i = 1; $i <= 50; $i++){
            DB::table('posts')->insert([
                'title' => $title,
                'slug' => $slug,
                'body' => $faker->paragraph,
                'image' => $faker->image,
                'id_category' => $faker->numberBetween(1,20),
                'id_user' => $faker->numberBetween(1,20)
            ]);
        };
    }
}
