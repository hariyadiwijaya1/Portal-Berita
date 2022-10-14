<?php

use App\User;
use App\UserDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\FileIterator\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'role' =>$faker->randomDigit,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
            ]);

            UserDetail::create([
                'user_id' => $user->id,
                'nama' => $faker->name,
                'status' => $faker->word,
            ]);
        }
    }
}
