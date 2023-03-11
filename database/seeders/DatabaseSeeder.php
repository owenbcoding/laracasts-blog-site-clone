<?php

namespace Database\Seeders;

use \App\Models\Post;
use \App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create([
            'name' => 'john Doe'
        ]);

        Post::factory(30)->create([
            'user_id' => $user->id,
            'published_at' => now()
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'some text here',
        //     'body' => '<p>A personal post</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'some text here',
        //     'body' => '<p>A family Post</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'some text here',
        //     'body' => '<p>A work Post</p>'
        // ]);
    }
}
