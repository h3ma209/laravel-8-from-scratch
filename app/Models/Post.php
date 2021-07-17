<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
    use HasFactory;

    protected $with = [
        'category',
        'user'
    ];

    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'slug',
        'category_id',
        "user_id"
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {

            $query
                ->where("title", 'like', '%' . $search . "%")
                ->orWhere("body", 'like', '%' . $search . "%");
        });
        
        $query->when(

            $filters['category'] ?? false,
            fn ($query, $category) =>
            
            $query->whereHas(
                "category",
                fn ($query) =>
                $query->where('name', $category)
            )
        );
        $query->when(
            $filters['user'] ?? false,
            fn ($query, $user) =>
            $query->whereHas(
                "user",
                fn ($query) =>
                $query->where('username', $user)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
