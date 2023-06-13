<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InvestorDetails;

class InvestorDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investordetails = InvestorDetails::get();
        return view('Backend.InvestorDetails.index', compact('investordetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.InvestorDetails.create');
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
            $request->image->move(public_path('/asset/investorimage/'), $name);
        }

        $investordetails = new InvestorDetails();
        $investordetails->title = $request->title;
        $investordetails->description = $request->description;
        $investordetails->image = $name;
        $investordetails->save();
        return redirect()->to('/investordetails')->with('success','Insert Successfull');
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
        $investordetails = InvestorDetails::find($id);
        return view('Backend.InvestorDetails.edit',compact('investordetails'));
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
        $investordetails = InvestorDetails::find($id);

        if(isset($request->image)){
            if($investordetails->image && file_exists('asset/investorimage/'.$investordetails->image)){
                unlink('asset/investorimage/'.$investordetails->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/investorimage/'),$updateImage);
            $investordetails->image = $updateImage;

        }

        $investordetails->title = $request->title;
        $investordetails->description = $request->description;
        $investordetails->save();
        return redirect()->to('/investordetails')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $investordetailsDelete = InvestorDetails::find($id);
        $investordetailsDelete->delete();
        return redirect()->to('/investordetails')->with('success','Deleted');
    }


    //BusinessDetailsStatus Change
    function statusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = InvestorDetails::where("id", "=", $slider_id )->first()->status;
        if($slider_status == 1){
            InvestorDetails::where("id", "=", $slider_id)->update(["status"=>0]);
        }
        elseif ($slider_status == 0){
            InvestorDetails::where("id", "=", $slider_id)->update(["status"=>1]);
        }
        return $slider_id;
    }
}
