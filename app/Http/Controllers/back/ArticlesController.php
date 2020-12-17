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
        $data['articles'] = Article::orderBy('id', 'ASC')->get();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
