<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasMany(ArticlesCategory::class, 'articles_guid', 'articles_guid');
    }
    public function article_comments()
    {
        return $this->hasMany(ArticleComment::class, 'article_guid', 'articles_guid');
    }
}
