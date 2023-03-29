<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable=[
        'title' ,
        'type_id',
        'user_id',
        'content',
        'video_link',
        'thumbnail',
        'excerpt',
        'slug',
        'counts',
    ];

    protected $guarded=[
        'id'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_articles');
    }
    public function getRouteKeyName(): string
    {
    return 'slug';
    }
    
}
