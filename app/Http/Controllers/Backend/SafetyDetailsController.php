<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SafetyDetails;


class SafetyDetailsController extends Controller
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
        return view('Backend.SafetyDetails.create');
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

        $safetydetails = new SafetyDetails();
        $safetydetails->title = $request->title;
        $safetydetails->description = $request->description;
        $safetydetails->image = $name;
        $safetydetails->save();
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
      $safetydetails = SafetyDetails::find($id);
      return view('Backend.SafetyDetails.edit',compact('safetydetails'));
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
        $safetydetails = SafetyDetails::find($id);

        if(isset($request->image)){
            if($safetydetails->image && file_exists('asset/safetyimage/'.$safetydetails->image)){
                unlink('asset/safetyimage/'.$safetydetails->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/safetyimage/'),$updateImage);
            $safetydetails->image = $updateImage;

        }

        $safetydetails->title = $request->title;
        $safetydetails->description = $request->description;
        $safetydetails->save();
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
