<?php

use App\Post;
use App\Berita;
use faker\Factory as faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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
        // $slug = SlugService::createSlug(Berita::class, 'slug', $title);

        for ($i = 1; $i <= 15; $i++) {
            $faker = Faker::create('id');
            $title = $faker->sentence;
            $slug = Str::slug($title, '-');
            Post::create([
                'title' => $title,
                'slug' => $slug,
                'body' => $faker->paragraphs(20, true),
                'image' => $faker->numberBetween(1, 10) . '.jpg',
                'id_category' => $faker->numberBetween(1, 5),
                'id_user' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
