<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyGlobal;

class CompanyGlobalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyglobal = CompanyGlobal::get();
        return view('Backend.CompanyGlobal.index', compact('companyglobal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.CompanyGlobal.create');
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
            $request->image->move(public_path('/asset/globalimage/'), $name);
        }



        $companyglobal = new CompanyGlobal();
        $companyglobal->title = $request->title;
        $companyglobal->leftDescription = $request->leftDescription;
        $companyglobal->rightDescription = $request->rightDescription;
        $companyglobal->image = $name;
        $companyglobal->save();
        return redirect()->to('/companyglobal')->with('success','Successfull');
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
        $companyglobal = CompanyGlobal::find($id);
        return view('Backend.CompanyGlobal.edit',compact('companyglobal'));
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
        $companyglobal = CompanyGlobal::find($id);

        if(isset($request->image)){
            if($companyglobal->image && file_exists('/asset/globalimage/'.$companyglobal->image)){
                unlink('/asset/globalimage/'.$companyglobal->image );
            }
            $updateimage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/globalimage/'),$updateimage);
            $companyglobal->image = $updateimage;

        }

        $companyglobal->title = $request->title;
        $companyglobal->leftDescription = $request->leftDescription;
        $companyglobal->rightDescription = $request->rightDescription;
        $companyglobal->save();
        return redirect()->to('/companyglobal')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companyglobalDelete = CompanyGlobal::find($id);
        $companyglobalDelete->delete();
        return redirect()->back()->with('success','Delete Successfull');
    }

    //CompanyGlobal status change function
    function globalStatusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = CompanyGlobal::where("id", "=", $slider_id )->first()->status;
        if($slider_status == 1){
            CompanyGlobal::where("id", "=", $slider_id)->update(["status"=>0]);
        }
        elseif ($slider_status == 0){
            CompanyGlobal::where("id", "=", $slider_id)->update(["status"=>1]);
        }
        return $slider_id;
    }
}
