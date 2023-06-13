<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessTitle;

class BusinessTitleController extends Controller
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
        return view('Backend.BusinessTitle.create');
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
            $request->image->move(public_path('/asset/businessimage/'), $name);
        }

        $businesstitle = new BusinessTitle();
        $businesstitle->title = $request->title;
        $businesstitle->description = $request->description;
        $businesstitle->image = $name;
        $businesstitle->save();
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
      $businesstitle = BusinessTitle::find($id);
      return view('Backend.BusinessTitle.edit',compact('businesstitle'));
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
        $businesstitle = BusinessTitle::find($id);

        if(isset($request->image)){
            if($businesstitle->image && file_exists('asset/businessimage/'.$businesstitle->image)){
                unlink('asset/businessimage/'.$businesstitle->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/businessimage/'),$updateImage);
            $businesstitle->image = $updateImage;

        }

        $businesstitle->title = $request->title;
        $businesstitle->description = $request->description;
        $businesstitle->save();
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
