<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Photos::all();
        return view('photo.index', compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows = Photos::all();
        return view('photo.create', compact('rows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = new Photos();
        $photo->photo_date = $request->photo_date;
        $photo->photo_title = $request->photo_title;
        $photo->photo_text = $request->photo_text;
        $photo->photo_upload = $request->photo_upload;
        $photo->post_id = $request->post_id;
        $photo->save();
        return redirect('/photo');
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
        $row = Photos::findOrFail($id);
        return view('photo.edit', compact("row"));
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
        $row = Photos::findOrFail($id);
        $row ->update([
            'photo_date' => request('photo_date'),
            'photo_title' => request('photo_title'),
            'photo_text' => request('photo_text'),
            'photo_upload' => request('photo_upload'),
            'post_id' => request('post_id'),
        ]);
        return redirect('/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $row = Post::findOrFail($id);
        $row->delete();
        return redirect('photos');
    }
}
