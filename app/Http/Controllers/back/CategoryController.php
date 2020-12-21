<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::orderBy('id', 'DESC')->get();
        return view('back.categories.index', $data);
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
            'url' => route('admin.kategoriler.create'),
            'title' => 'Kategori Ekle'
        );
        return view('back.categories.create', $data);
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
        ]);
        $com = new Category();
        $com->category_guid =  Str::uuid();
        $com->name =  $request->title;
        $com->slug = Str::slug($request->title);
        $com->save();
        return redirect()->route('admin.kategoriler.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        $data['category'] = $category;
        $data['bread_crumb'][] = array(
            'url' => route('admin.kategoriler.edit', $id),
            'title' => $category->name
        );
        return view('back.categories.edit', $data);
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
            'name' => 'min:3',
        ]);
        $com = Category::where('id', $id)->first();
        $com->name =  $request->name;
        $com->slug = Str::slug($request->name);
        $com->save();
        return redirect()->route('admin.kategoriler.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sil($id)
    {
        $a = Category::where('id', $id)->delete();
        return redirect()->route('admin.kategoriler.index');
    }
}
