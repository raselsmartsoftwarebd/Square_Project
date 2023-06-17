<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InvestorDetails;
use App\Traits\FileSaver;

class InvestorDetailsController extends Controller
{
    use FileSaver;
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
    public function store(Request $request , $id=null)
    {
        $this->storeOrUpdate($request);
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
        $this->storeOrUpdate($request, $id);
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


    //InvestorDetailsStatus Change
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

    public function storeOrUpdate(Request $request, $id = null){

        $investordetails = InvestorDetails::updateOrCreate([
            'id'                => $id,
        ], [
            'title'             => $request->title,
            'description'       => $request->description,
            'status'            => 1,
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $this->upload_file($file, $investordetails, 'image', 'asset/investorimage');
        }

    }
}
