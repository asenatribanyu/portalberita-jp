<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[
        'id'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'category_articles');
    }
}
