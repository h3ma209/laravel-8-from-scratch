<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [PostController::class,'index']);


Route::get('/users/{user}',function(User $user){ 
    //dd($user->posts);
    return view('posts',[
        'posts'=> $user->posts
    ]);
});

Route::get('/posts/{post}',[PostController::class,'show']);

Route::get('categories/{category:name}',function(Category $category){
    return view('posts',[
        "posts"=> $category->posts
    ]);
});


Route::get('register', [RegisterController::class, "create"]);
Route::post('register', [RegisterController::class, "store"]);
