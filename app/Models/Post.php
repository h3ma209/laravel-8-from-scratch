<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->date = $date;
        $this->body = $body;
        $this->excerpt = $excerpt;
    }

    public static function all()
    {
        // $files = File::files(resource_path('posts/'));
        // return array_map(function($file){
        //     return $file->getContents();
        // },$files);

        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path('posts')))
                ->map(fn ($file) => YamlFrontMatter::parseFile($file))
                ->map(fn ($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                ))
                ->sortBy("date");

                
        });
    }
    public static function find($slug)
    {
        $path = resource_path("posts/" . $slug . '.html');
        if (!file_exists($path)) {
            throw new ModelNotFoundException();
        }

        return cache()->remember(`posts.{$slug}`, 1, fn () => file_get_contents($path));

        // return static::all()->firstWhere('slug',$slug);
    }
}
