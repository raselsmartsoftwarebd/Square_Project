<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SafetyTitle;

class SafetyTitleController extends Controller
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
        return view('Backend.SafetyTitle.create');
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

        $safetytitle = new SafetyTitle();
        $safetytitle->title = $request->title;
        $safetytitle->description = $request->description;
        $safetytitle->image = $name;
        $safetytitle->save();
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

    public function titleedit($id)
    {
      $safetytitle = SafetyTitle::find($id);
      return view('Backend.SafetyTitle.edit',compact('safetytitle'));
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
        $safetytitle = SafetyTitle::find($id);

        if(isset($request->image)){
            if($safetytitle->image && file_exists('asset/safetyimage/'.$safetytitle->image)){
                unlink('asset/safetyimage/'.$safetytitle->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/safetyimage/'),$updateImage);
            $safetytitle->image = $updateImage;

        }

        $safetytitle->title = $request->title;
        $safetytitle->description = $request->description;
        $safetytitle->save();
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
