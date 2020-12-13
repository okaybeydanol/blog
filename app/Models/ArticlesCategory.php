<?php

namespace App\Models;

use Articles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlesCategory extends Model
{
    use HasFactory;
    protected $table = 'articles_category';
    public function categoryInfo()
    {
        return $this->hasOne(Category::class, 'category_guid', 'category_guid');
    }
    public function article()
    {
        return $this->hasOne(Article::class, 'articles_guid', 'articles_guid');
    }
}
