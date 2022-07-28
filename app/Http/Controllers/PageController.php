<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //find and display
        $pages = Page::all()->reverse();
        return view("admin.pages.index",compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //display create form
        $pages = Page::all();
        return view('admin.pages.create',compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();
        //validate required data
        $request->validate([
            'name'=> 'required',
            'content'=> 'required'
        ]);
        //create a new db entry for post
        $page->name = $request->name;
        $page->content = $request->content;
        $page->save();
        //redirect to home page with a message
        return redirect(route(('pages.index')))->with('success','you page was created');
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
        $pages = Page::find($id);
        return view('admin.pages.edit',compact('pages'));
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
        $page = Page::find($id);
        $request->validate([
            'name'=> 'required',
            'content'=> 'required'
        ]);
        $page->update($request->all());
        return redirect(route(('pages.index')))->with('success','you page was updated');;
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
        $page = Page::find($id);
        $page->delete();
        return redirect(route('admin.index'))->with('success','you page was deleted');;
    }
}
