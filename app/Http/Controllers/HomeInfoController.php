<?php

namespace App\Http\Controllers;

use App\Models\homeInfo;
use App\Models\Products;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HomeInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Products::all();
        $info = homeInfo::find(1);
        return view('home.index',compact('info'),compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\homeInfo  $homeInfo
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $product = Products::where('slug',$slug)->get();
        //$comments = Products::where('id',2)->comments();
        $info = homeInfo::find(1);
        $tags = Tag::all();
        $cats = Category::all();
        return view('home.single',compact('product'),compact('info'))
        ->with('tags',$tags)
        ->with('cats',$cats);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\homeInfo  $homeInfo
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $info = homeInfo::find(1);
        return view('admin.settings',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\homeInfo  $homeInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $info = homeInfo::where('id',1);
        //
        $validData = $request->validate([
            'name'=>'',
            'description'=>''
        ]);
        $info->update($validData);
        return redirect(route('admin.index'))->with('success','site info updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\homeInfo  $homeInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(homeInfo $homeInfo)
    {
        //
    }
}
