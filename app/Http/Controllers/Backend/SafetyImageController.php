<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SafetyImage;

class SafetyImageController extends Controller
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
        return view('Backend.SafetyImage.create');
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
            $request->image->move(public_path('/asset/safetyimage/'), $name);
        }

        $safetyimage = new SafetyImage();
        $safetyimage->image = $name;
        $safetyimage->save();
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
        //
    }

    public function imageedit($id)
    {
      $safetyimage = SafetyImage::find($id);
      return view('Backend.SafetyImage.edit',compact('safetyimage'));
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
        $safetyimage = SafetyImage::find($id);

        if(isset($request->image)){
            if($safetyimage->image && file_exists('asset/safetyimage/'.$safetyimage->image)){
                unlink('asset/safetyimage/'.$safetyimage->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/safetyimage/'),$updateImage);
            $safetyimage->image = $updateImage;

        }

        $safetyimage->save();
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
