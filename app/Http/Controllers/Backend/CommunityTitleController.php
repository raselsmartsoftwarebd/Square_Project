<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommunityTitle;

class CommunityTitleController extends Controller
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
        return view('Backend.CommunityTitle.create');
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
            $request->image->move(public_path('/asset/communityimage/'), $name);
        }

        $communitytitle = new CommunityTitle();
        $communitytitle->title = $request->title;
        $communitytitle->description = $request->description;
        $communitytitle->image = $name;
        $communitytitle->save();
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
      $communitytitle = CommunityTitle::find($id);
      return view('Backend.CommunityTitle.edit',compact('communitytitle'));
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
        $communitytitle = CommunityTitle::find($id);

        if(isset($request->image)){
            if($communitytitle->image && file_exists('asset/communityimage/'.$communitytitle->image)){
                unlink('asset/communityimage/'.$communitytitle->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/communityimage/'),$updateImage);
            $communitytitle->image = $updateImage;

        }

        $communitytitle->title = $request->title;
        $communitytitle->description = $request->description;
        $communitytitle->save();
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
