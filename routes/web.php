<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $posts = Post::latest();

    if(request('search')){
        $posts
        ->where("title", 'like','%' .request("search")."%")
        ->orWhere("body", 'like','%' .request("search")."%");
    }

    return view('posts',[
        "posts" => $posts->get(),
        "categories" => Category::all()
    ]);
    
});


Route::get('/users/{user}',function(User $user){ 
    //dd($user->posts);
    return view('posts',[
        'posts'=> $user->posts
    ]);
});

Route::get('/posts/{post}',function(Post $post){ 
    return view('post',[
        'post'=> $post
    ]);
});

Route::get('categories/{category:name}',function(Category $category){
    return view('posts',[
        "posts"=> $category->posts
    ]);
});

