<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Article extends Model
{
    use HasFactory;
    protected $table = 'category_articles';
    protected $fillable = ['category_id', 'article_id'];
}
