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
        'pin'
    ];

    protected $guarded=[
        'id'
    ];
    public function articletrans()
    {
        return $this->hasMany(ArticleTrans::class);
    }

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
    public function hasViewed($ip)
    {
        return $this->views()->where('ip_address', $ip)->exists();
    }
    
    public function recordView($ip)
    {
        $this->increment('counts');
        $this->views()->create(['ip_address' => $ip]);
    }

    public function views()
    {
    return $this->hasMany(View::class);
    }
    public function translation($locale)
    {
        return $this->articletrans()
            ->where('locale', $locale)
            ->first();
    }
}
