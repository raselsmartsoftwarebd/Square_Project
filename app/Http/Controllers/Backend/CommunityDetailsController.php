<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommunityDetails;

class CommunityDetailsController extends Controller
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
        return view('Backend.CommunityDetails.create');
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

        $communitydetails = new CommunityDetails();
        $communitydetails->title = $request->title;
        $communitydetails->description = $request->description;
        $communitydetails->image = $name;
        $communitydetails->save();
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

    public function detailsedit($id)
    {
      $communitydetails = CommunityDetails::find($id);
      return view('Backend.CommunityDetails.edit',compact('communitydetails'));
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
        $communitydetails = CommunityDetails::find($id);

        if(isset($request->image)){
            if($communitydetails->image && file_exists('asset/communityimage/'.$communitydetails->image)){
                unlink('asset/communityimage/'.$communitydetails->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/communityimage/'),$updateImage);
            $communitydetails->image = $updateImage;

        }

        $communitydetails->title = $request->title;
        $communitydetails->description = $request->description;
        $communitydetails->save();
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
