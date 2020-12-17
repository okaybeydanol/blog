<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Category;
use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Comment;
use App\Models\ArticlesCategory;
use App\Models\Page;
use Str;

class Homepage extends Controller
{
    public function index()
    {
        $data['articles'] = Article::with('category.categoryInfo', 'article_comments.comment')->where('status', '1')->orderBy('id', 'desc')->paginate(2);
        $data['categories'] = Category::withCount('article')->get();
        $data['pages'] = Page::orderBy('order', 'asc')->get();
        return view('front.homepage', $data);
    }

    public function single($slug)
    {
        $data['article'] = Article::where('slug', $slug)->with('category.categoryInfo',  'article_comments.comment', 'article_comments.comment_comments.comment')->orderBy('id', 'desc')->first() ?? abort(404);
        $id = $data['article']->id;
        $data['article']->increment('hit');
        $data['categories'] = Category::withCount('article')->get();
        $data['article_next'] = Article::where('id', '>', $id)->orderBy('id', 'asc')->first();
        $data['article_p'] = Article::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $data['pages'] = Page::orderBy('order', 'asc')->get();
        return view('front.single', $data);
    }

    public function category($slug)
    {
        $data['pages'] = Page::orderBy('order', 'asc')->get();
        $data['categories'] = Category::withCount('article')->get();
        $data['category_page'] = Category::where('slug', $slug)->first() ?? abort(404);
        $data['articlesCategory'] = ArticlesCategory::where('category_guid', $data['category_page']->category_guid)->orderBy('id', 'asc')->with('article')->paginate(2) ?? abort(404);
        return view('front.category', $data);
    }

    public function page($slug)
    {

        $data['page'] = page::where('slug', $slug)->first() ?? abort(404);
        $data['categories'] = Category::withCount('article')->get();
        $data['pages'] = Page::orderBy('order', 'asc')->get();
        return view('front.page', $data);
    }
    public function comment_save($slug, Request $r)
    {
        if ($r->comment_parent != '0') {

            $findComment = ArticleComment::where('comment_guid', $r->comment_parent)->first();
            $article = Article::where('slug', $slug)->orderBy('id', 'desc')->first();

            $com = new ArticleComment();
            $com->comment_guid =  Str::uuid();
            $com->pcomment_guid =  $findComment->comment_guid;
            $com->save();

            $c = new Comment();
            $c->comment_guid = $com->comment_guid;
            $c->comment = $r->comment;
            $c->ad = $r->ad;
            $c->save();
            return redirect()->back();
        } else {
            # code...
            $article = Article::where('slug', $slug)->orderBy('id', 'desc')->first();
            $com = new ArticleComment();
            $com->article_guid = $article->articles_guid;
            $com->comment_guid =  Str::uuid();
            $com->save();

            $c = new Comment();
            $c->comment_guid = $com->comment_guid;
            $c->comment = $r->comment;
            $c->ad = $r->ad;
            $c->save();
            return redirect()->back();
        }
    }
}
