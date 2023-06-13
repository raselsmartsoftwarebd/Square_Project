<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyTeam;

class CompanyTeamController extends Controller
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
        return view('Backend.CompanyTeam.create');
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
            $request->image->move(public_path('/asset/teamimage/'), $name);
        }

        $companyteam = new CompanyTeam();
        $companyteam->title = $request->title;
        $companyteam->description = $request->description;
        $companyteam->image = $name;
        $companyteam->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companyteam = CompanyTeam::find($id);
        return view('Backend.CompanyTeam.edit',compact('companyteam'));
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
        $companyteam = CompanyTeam::find($id);

        if(isset($request->image)){
            if($companyteam->image && file_exists('asset/teamimage/'.$companyteam->image)){
                unlink('asset/teamimage/'.$companyteam->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/teamimage/'),$updateImage);
            $companyteam->image = $updateImage;

        }

        $companyteam->title = $request->title;
        $companyteam->description = $request->description;
        $companyteam->save();
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
