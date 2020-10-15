<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('posts')->insert([
            'user_id' => random_int(1,10),
            'category_id' => random_int(1,3),
            'title' => 'Title 1',
            'body' => $faker->text,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('posts')->insert([
            'user_id' => random_int(1,10),
            'category_id' => random_int(1,3),
            'title' => 'Title 2',
            'body' => $faker->text,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('posts')->insert([
            'user_id' => random_int(1,10),
            'category_id' => random_int(1,3),
            'title' => 'Title 3',
            'body' => $faker->text,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('posts')->insert([
            'user_id' => random_int(1,10),
            'category_id' => random_int(1,3),
            'title' => 'Title 4',
            'body' => $faker->text,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('posts')->insert([
            'user_id' => random_int(1,10),
            'category_id' => random_int(1,3),
            'title' => 'Title 5',
            'body' => $faker->text,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
