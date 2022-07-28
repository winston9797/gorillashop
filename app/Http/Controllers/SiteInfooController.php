<?php

namespace App\Http\Controllers;

use App\Models\siteInfoo;
use Illuminate\Http\Request;

class SiteInfooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $infos = siteInfoo::all();
        return view('admin.settings',compact('infos'));
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
     * @param  \App\Models\siteInfoo  $siteInfoo
     * @return \Illuminate\Http\Response
     */
    public function show(siteInfoo $siteInfoo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siteInfoo  $siteInfoo
     * @return \Illuminate\Http\Response
     */
    public function edit(siteInfoo $siteInfoo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siteInfoo  $siteInfoo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $info = siteInfoo::find($id);
        $request->validate([
            'name'=> 'required',
            'desc'=> 'required'
        ]);
        $info->update($request->all());
        return redirect(route('settings.index'))->with('success','you infos was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siteInfoo  $siteInfoo
     * @return \Illuminate\Http\Response
     */
    public function destroy(siteInfoo $siteInfoo)
    {
        //
    }
}
