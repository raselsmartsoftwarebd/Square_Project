<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyExcellence;

class CompanyExcellenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyexcellence = CompanyExcellence::get();
        return view('Backend.CompanyExcellence.index', compact('companyexcellence'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.CompanyExcellence.create');
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
            $request->image->move(public_path('/asset/excellenceimage/'), $name);
        }

        $companyexcellence = new CompanyExcellence();
        $companyexcellence->title = $request->title;
        $companyexcellence->description = $request->description;
        $companyexcellence->image = $name;
        $companyexcellence->save();
        return redirect()->to('/companyexcellence')->with('success','Created');


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
        $companyexcellence = CompanyExcellence::find($id);
        return view('Backend.CompanyExcellence.edit',compact('companyexcellence'));
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
        $companyexcellence = CompanyExcellence::find($id);

        if(isset($request->image)){
            if($companyexcellence->image && file_exists('asset/excellenceimage/'.$companyexcellence->image)){
                unlink('asset/excellenceimage/'.$companyexcellence->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/excellenceimage/'),$updateImage);
            $companyexcellence->image = $updateImage;

        }

        $companyexcellence->title = $request->title;
        $companyexcellence->description = $request->description;
        $companyexcellence->save();
        return redirect()->to('/companyexcellence')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $excellenceDelete = CompanyExcellence::find($id);
        $excellenceDelete->delete();
        return redirect()->to('/companyexcellence')->with('success','Deleted');
    }


    //status change
    function excellenceStatusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = CompanyExcellence::where("id", "=", $slider_id )->first()->status;
        if($slider_status == 1){
            CompanyExcellence::where("id", "=", $slider_id)->update(["status"=>0]);
        }
        elseif ($slider_status == 0){
            CompanyExcellence::where("id", "=", $slider_id)->update(["status"=>1]);
        }
        return $slider_id;
    }
}
