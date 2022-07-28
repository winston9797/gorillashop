<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class ProductsController extends Controller
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
        return view('admin.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cats = Category::all();
        $tags = Tag::all();
        return view('admin.addProduct',compact('cats'),compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProducts = new Products();
        $products_id = 1;
        //
        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'description'=>'required',
            'slug'=>'required'
        ]);
        if($request->image != null){
            $newProducts->image = $request->file('image')->store('public/images');
        }
        $newProducts->name = $request->name;
        $newProducts->price = $request->price;
        $newProducts->slug = $request->slug;
        $newProducts->description = $request->description;
        $newProducts->cat_id = $request->cat_id;
        $request->products_id = $products_id;
        $slugcheck = Products::where('slug',$request->slug)->first();
        //make sure were not using same slug
        if($slugcheck != null){
            return redirect()->route('admin.create')->with('fail','the slug already exist');
        }else{
            $newProducts->save();
            //add tags after the post is created
            $newProducts->tags()->attach($request->tags);
            return redirect()->route('admin.create')->with('success','your post was created succufuly');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        return $slug;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $cats = Category::all();
        $tags = Tag::all();
        $product = Products::where('slug',$slug)->first();
        return view('admin.edit', compact('cats'),compact('tags'))->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$slug)
    {
        //
        $product = Products::where('slug',$slug)->first();
        //
        $validData = $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'description'=>'required',
            'slug'=>'required'
        ]);
        $product->cat_id = $request->cat_id;
        $product->update($validData);
        $product->tags()->detach();
        $product->tags()->attach($request->tags);
        return redirect(route('admin.index'))->with('success','your post was edited succufuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        //cut the relationship between product and tags and remove pivote table
        $product->tags()->detach();
        if($product->image != null){
            Storage::delete($product->image);
        }
    
        $product->delete($id);

        return redirect(route('admin.index'))->with('success','your post was deleted succufuly');
    }
}
