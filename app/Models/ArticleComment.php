<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;
    protected $table = 'article_comments';
    public function comment_comments()
    {
        return $this->hasMany(ArticleComment::class, 'pcomment_guid', 'comment_guid');
    }
    public function comment()
    {
        return $this->hasOne(Comment::class, 'comment_guid', 'comment_guid');
    }
}
