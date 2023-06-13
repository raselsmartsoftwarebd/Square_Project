<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessDetails;

class BusinessDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businessdetails = BusinessDetails::get();
        return view('Backend.BusinessDetails.index', compact('businessdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.BusinessDetails.create');
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

        $businessdetails = new BusinessDetails();
        $businessdetails->title = $request->title;
        $businessdetails->description = $request->description;
        $businessdetails->image = $name;
        $businessdetails->save();
        return redirect()->to('/businessdetails')->with('success','Insert Successfull');
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
        $businessdetails = BusinessDetails::find($id);
        return view('Backend.BusinessDetails.edit',compact('businessdetails'));
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
        $businessdetails = BusinessDetails::find($id);

        if(isset($request->image)){
            if($businessdetails->image && file_exists('asset/businessimage/'.$businessdetails->image)){
                unlink('asset/businessimage/'.$businessdetails->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/businessimage/'),$updateImage);
            $businessdetails->image = $updateImage;

        }

        $businessdetails->title = $request->title;
        $businessdetails->description = $request->description;
        $businessdetails->save();
        return redirect()->to('/businessdetails')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $businessdetailsDelete = BusinessDetails::find($id);
        $businessdetailsDelete->delete();
        return redirect()->to('/businessdetails')->with('success','Deleted');
    }


    //BusinessDetailsStatus Change
    function statusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = BusinessDetails::where("id", "=", $slider_id )->first()->status;
        if($slider_status == 1){
            BusinessDetails::where("id", "=", $slider_id)->update(["status"=>0]);
        }
        elseif ($slider_status == 0){
            BusinessDetails::where("id", "=", $slider_id)->update(["status"=>1]);
        }
        return $slider_id;
    }
}
