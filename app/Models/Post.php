<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post 
{
    public static function all()
    {
        $files = File::files(resource_path('posts/'));
        return array_map(function($file){
            return $file->getContents();
        },$files);
        // ddd($files);
        //return File::files(resource_path('posts/'));
    }
    public static function find($slug){
        $path = resource_path("posts/".$slug.'.html');
        if (!file_exists($path)){
            throw new ModelNotFoundException();
        }

        return cache()->remember(`posts.{$slug}`,1,fn() =>file_get_contents($path));
    }

    
}
