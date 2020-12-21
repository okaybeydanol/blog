<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Controllers\front\Homepage;
use Illuminate\Http\Request;

// Models
use App\Models\Category;
use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Comment;
use App\Models\ArticlesCategory;
use App\Models\Page;
use Str;
use Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['articles'] = Article::with('category.categoryInfo')->orderBy('id')->get();
        $data['articles'] = Article::orderBy('id', 'desc')->get();
        return view('back.articles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::get();
        $data['bread_crumb'][] = array(
            'url' => route('admin.makaleler.create'),
            'title' => 'Makale Ekle'
        );
        return view('back.articles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'min:3',
            'content' => 'min:50',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);
        $com = new Article();
        $com->articles_guid =  Str::uuid();
        $com->user_guid =  Auth::guard('web')->user()->name;
        $com->title =  $request->title;
        $com->content =  $request->content;
        $com->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $com->image =  'uploads/' .  $imageName;
        }
        $com->save();

        $c = new ArticlesCategory();
        foreach ($request->categories as $category) {
            $c->category_guid = $category;
            $c->articles_guid = $com->articles_guid;
        }
        $c->save();
        return redirect()->route('admin.makaleler.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = Category::get();
        $article = Article::where('id', $id)->first();
        $category = ArticlesCategory::where('articles_guid', $article->articles_guid)->get();
        foreach ($data['categories'] as $key => $cat) {

            $index = array_search($cat->category_guid, array_column($category->toArray(), 'category_guid'));
            if ($index !== false) {
                $cat['selected'] = true;
            } else {
                $cat['selected'] = false;
            }
        }
        $data['bread_crumb'][] = array(
            'url' => route('admin.makaleler.index'),
            'title' => 'Makaleler'
        );
        $data['bread_crumb'][] = array(
            'url' => route('admin.makaleler.edit', $id),
            'title' => $article->title
        );
        $data['article'] = $article;
        return view('back.articles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'min:3',
            'content' => 'min:50',
            'image' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);
        $com = Article::where('id', $id)->first();
        $com->title =  $request->title;
        $com->content =  $request->content;
        $com->slug = Str::slug($request->title);
        $com->status = $request->status;
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $com->image =  'uploads/' .  $imageName;
        }
        $com->save();
        $c = ArticlesCategory::where('articles_guid', $com->articles_guid)->delete();
        foreach ($request->categories as $category) {
            $aC = new ArticlesCategory();
            $aC->category_guid = $category;
            $aC->articles_guid = $com->articles_guid;
            $aC->save();
        }
        return redirect()->route('admin.makaleler.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sil($id)
    {
        $data['articles'] = Article::where('id', $id)->first();
        if ($data['articles']) {
            $a = Article::where('id', $id)->delete();
            $c = ArticlesCategory::where('articles_guid', $data['articles']->articles_guid)->delete();
            return redirect()->route('admin.makaleler.index');
        } else {
            return redirect()->route('admin.makaleler.index');
        }
    }
}
