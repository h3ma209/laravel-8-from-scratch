<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use \App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        Post::factory(10)->create();

        // $user = User::factory()->create();
        
        // $personal = Category::create([
        //     "name" => "Personal",
        //     'slug' => "personal"
        // ]);

        // $work = Category::create([
        //     "name" => "Work",
        //     'slug' => "work"
        // ]);

        // $hobby = Category::create([
        //     "name" => "Hobby",
        //     'slug' => "hobby"
        // ]);

        // Post::create([
        //     "user_id" => $user->id,
        //     "category_id" => $personal->id,
        //     "title" => "My Personal Post",
        //     "excerpt" => "lorem ipsum dolor amer",
        //     "slug" => "my-first-post",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis reprehenderit est, explicabo hic iste recusandae, incidunt dolorum ad commodi pariatur perferendis facere, sint tempore maxime porro? Qui deleniti minus deserunt."
            
        // ]);

        // Post::create([
        //     "user_id" => $user->id,
        //     "category_id" => $work->id,
        //     "title" => "My work Post",
        //     "excerpt" => "lorem ipsum dolor amer",
        //     "slug" => "my-work-post",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis reprehenderit est, explicabo hic iste recusandae, incidunt dolorum ad commodi pariatur perferendis facere, sint tempore maxime porro? Qui deleniti minus deserunt."
            
        // ]);

        // Post::create([
        //     "user_id" => $user->id,
        //     "category_id" => $hobby->id,
        //     "title" => "My hobby Post",
        //     "excerpt" => "lorem ipsum dolor amer",
        //     "slug" => "my-hobby-post",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis reprehenderit est, explicabo hic iste recusandae, incidunt dolorum ad commodi pariatur perferendis facere, sint tempore maxime porro? Qui deleniti minus deserunt."
            
        // ]);



    }
}
