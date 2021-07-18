<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    
        
        // dd(request(["search"]));
        return view('posts', [
            "posts" => Post::latest()->filter(request(["search",'category','user']))
            ->paginate(4),
            
        ]);
    }
    public function show(Post $post)
    {
        //ddd($post->comments);
        return view('post', [
            'post' => $post,
            'comments' => $post->comments
        ]);
    }


}
