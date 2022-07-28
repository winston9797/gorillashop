<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //find and display
        $posts = Post::all()->reverse();
        return view('admin.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //display create form
        $cat = Category::all();
        return view('admin.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        //validate required data
        $request->validate([
            'name'=> 'required',
            'content'=> 'required',
            'file'=> 'required',
            'cat_id'=>'required'
        ]);
        //create a new db entry for post
        $post->name = $request->name;
        $post->image = $request->file('file')->store('file');
        $post->content = $request->content;
        $post->cat_id = $request->cat_id;
        $post->save();
        //redirect to home page with a message
        return redirect(route(('admin.index')))->with('success','you post was created');
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
        //find and display in edit form
        $post = Post::find($id);
        $cat = Category::all();
        return view('admin.edit',compact('post'),compact('cat'));
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
        //find and update
        $post = Post::find($id);
        $request->validate([
            'name'=> 'required',
            'content'=> 'required'
        ]);
        $post->update($request->all());
        return redirect(route(('admin.index')))->with('success','you post was updated');;
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
        $post = Post::find($id);
        $post->delete();
        return redirect(route('admin.index'))->with('success','you post was deleted');;
    }
}
