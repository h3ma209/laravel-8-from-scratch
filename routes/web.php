<?php

use App\Models\Post;
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

    $files = File::files(resource_path('posts'));
    

    $posts = collect($files)->map(function($file){
        $documents = YamlFrontMatter::parseFile($file);
        return new Post(
            $documents->title,
            $documents->excerpt,
            $documents->date,
            $documents->body(),
            );
    });



    //ddd($posts);
    


    return view('posts',[
        'posts' => $posts
    ]);
});


Route::get('/post/{post}',function($slug){

    $post = Post::find($slug);
    return view('post',[
        'post'=> $post,
    ]);
});
