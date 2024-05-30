<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);
        
        Category::create([
            'name' => 'Politics',
           'slug' => 'politics'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Dimas Ganteng',
        //     'slug' => 'dimas-ganteng',
        //     'excerpt' => 'Karna Ketampanan',
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolorum porro nesciunt repellendus officiis aliquid, consequatur explicabo voluptates culpa. Maxime alias earum soluta! Provident accusantium corrupti expedita. Perferendis, sunt quo.",
        //     'category_id' => 1, 
        //     'user_id' => 1 
        // ]);
        // Post::create([
        //     'title' => 'Dimas Dua',
        //     'slug' => 'dimas-dua',
        //     'excerpt' => 'Karna Ketampanan',
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolorum porro nesciunt repellendus officiis aliquid, consequatur explicabo voluptates culpa. Maxime alias earum soluta! Provident accusantium corrupti expedita. Perferendis, sunt quo.",
        //     'category_id' => 2, 
        //     'user_id' => 2 
        // ]);
        // Post::create([
        //     'title' => 'Dimas Tiga',
        //     'slug' => 'dimas-tiga',
        //     'excerpt' => 'Karna Ketampanan',
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolorum porro nesciunt repellendus officiis aliquid, consequatur explicabo voluptates culpa. Maxime alias earum soluta! Provident accusantium corrupti expedita. Perferendis, sunt quo.",
        //     'category_id' => 1, 
        //     'user_id' => 2 
        // ]);
    }
}
