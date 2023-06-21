<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryDetails;

class GalleryDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerydetails = GalleryDetails::get();
        return view('Backend.GalleryDetails.index', compact('gallerydetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.GalleryDetails.create');
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

        $gallerydetails = new GalleryDetails();

        $gallerydetails->description = $request->description;
        $gallerydetails->image = $name;
        $gallerydetails->save();
        return redirect()->to('/gallerydetails')->with('success','Insert Successfull');
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
        $gallerydetails = GalleryDetails::find($id);
        return view('Backend.GalleryDetails.edit',compact('gallerydetails'));
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
        $gallerydetails = GalleryDetails::find($id);

        if(isset($request->image)){
            if($gallerydetails->image && file_exists('asset/galleryimage/'.$gallerydetails->image)){
                unlink('asset/galleryimage/'.$gallerydetails->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/galleryimage/'),$updateImage);
            $gallerydetails->image = $updateImage;

        }

        $gallerydetails->description = $request->description;
        $gallerydetails->save();
        return redirect()->to('/gallerydetails')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallerydetailsDelete = GalleryDetails::find($id);
        $gallerydetailsDelete->delete();
        return redirect()->to('/gallerydetails')->with('success','Deleted');
    }


    //GalleryDetailsStatus Change
    function statusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = GalleryDetails::where("id", "=", $slider_id )->first()->status;
        if($slider_status == 1){
            GalleryDetails::where("id", "=", $slider_id)->update(["status"=>0]);
        }
        elseif ($slider_status == 0){
            GalleryDetails::where("id", "=", $slider_id)->update(["status"=>1]);
        }
        return $slider_id;
    }
}
