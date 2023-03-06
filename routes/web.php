<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
// use App\Models\Categories;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Find a post by its slug and pass it to a view called "post"
    // Better to use collections
    return view('posts', [
        'posts' => Post::latest()->get(),
        'categories' => Category::all()
     ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::findOrFail($slug);

    return view('post', [
        'post' => $post 
    ]);

});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'categories' => Category::all()
     ]);
});


Route::get('authors/{author:username}', function (User $author) {
    //dd($author);
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
     ]);
});