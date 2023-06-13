<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutDetails;

class AboutDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutdetails = AboutDetails::get();
        return view('Backend.AboutDetails.index', compact('aboutdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.AboutDetails.create');
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
            $request->image->move(public_path('/asset/aboutimage/'), $name);
        }

        $aboutdetails = new AboutDetails();
        $aboutdetails->title = $request->title;
        $aboutdetails->description = $request->description;
        $aboutdetails->image = $name;
        $aboutdetails->save();
        return redirect()->to('/aboutdetails')->with('success','Insert Successfull');
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
        $aboutdetails = AboutDetails::find($id);
        return view('Backend.AboutDetails.edit',compact('aboutdetails'));
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
        $aboutdetails = AboutDetails::find($id);

        if(isset($request->image)){
            if($aboutdetails->image && file_exists('asset/aboutimage/'.$aboutdetails->image)){
                unlink('asset/aboutimage/'.$aboutdetails->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/aboutimage/'),$updateImage);
            $aboutdetails->image = $updateImage;

        }

        $aboutdetails->title = $request->title;
        $aboutdetails->description = $request->description;
        $aboutdetails->save();
        return redirect()->to('/aboutdetails')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutdetailsDelete = AboutDetails::find($id);
        $aboutdetailsDelete->delete();
        return redirect()->to('/aboutdetails')->with('success','Deleted');
    }

    function statusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = AboutDetails::where("id", "=", $slider_id )->first()->status;
        if($slider_status == 1){
            AboutDetails::where("id", "=", $slider_id)->update(["status"=>0]);
        }
        elseif ($slider_status == 0){
            AboutDetails::where("id", "=", $slider_id)->update(["status"=>1]);
        }
        return $slider_id;
    }
}
