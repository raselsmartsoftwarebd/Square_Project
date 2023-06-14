<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryTitle;

class GalleryTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.GalleryTitle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image')){
            $name = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/galleryimage/'), $name);
        }

        $gallerytitle = new GalleryTitle();
        $gallerytitle->title = $request->title;
        $gallerytitle->image = $name;
        $gallerytitle->save();
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

    }

    public function titleedit($id)
    {
      $gallerytitle = GalleryTitle::find($id);
      return view('Backend.GalleryTitle.edit',compact('gallerytitle'));
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
        $gallerytitle = GalleryTitle::find($id);

        if(isset($request->image)){
            if($gallerytitle->image && file_exists('asset/galleryimage/'.$gallerytitle->image)){
                unlink('asset/galleryimage/'.$gallerytitle->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/galleryimage/'),$updateImage);
            $gallerytitle->image = $updateImage;

        }

        $gallerytitle->title = $request->title;

        $gallerytitle->save();
        return redirect()->back()->with('success','Update Successfull');
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
