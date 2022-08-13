<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Sport & Fitness', 'slug' => 'sports-fitness'],
            ['title' => 'Lifestyle', 'slug' => 'lifestyle'],
            ['title' => 'Personal', 'slug' => 'personal'],
            ['title' => 'Nike Swim | Hydrastrong', 'slug' => 'nike-swim-hydrastrong', 'sub' => 1],
            ['title' => 'La Marathon | 2021', 'slug' => 'la-marathon-2021', 'sub' => 1],
            ['title' => 'Eight Sleep', 'slug' => 'eight-sleep', 'sub' => 2],
            ['title' => 'Seea', 'slug' => 'the-seea', 'sub' => 2],
            ['title' => "Swami's", 'slug' => 'swamis', 'sub' => 3],
            ['title' => 'Iceland Tourist', 'slug' => 'iceland-tourist', 'sub' => 3],
            ['title' => 'Wanderings', 'slug' => 'wanderings', 'sub' => 3],
        ];

        foreach ($data as $key => $value) {
            Categories::create($value);
        }

    }
}
