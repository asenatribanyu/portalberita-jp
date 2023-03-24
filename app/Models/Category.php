<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, sluggable;
    public function sluggable(): array
    {
        return [
            'category_slug' => [
                'source' => 'category_name'
            ]
        ];
    }

    protected $guarded=[
        'id'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'category_articles');
    }
    // public function articles()
    // {
    //     return $this->belongsToMany(Article::class, 'articles', 'category_id', 'article_id');
    // }
}
