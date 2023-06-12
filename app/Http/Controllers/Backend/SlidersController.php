<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sliders;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderss = Sliders::get();

        return view('Backend.Sliders.index', compact('sliderss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->file('slidingimage')){
            $name = time(). '.' .$request->slidingimage->extension();
            $request->slidingimage->move(public_path('/slidesimage/'), $name);
        }

        $sliders = new Sliders();
        $sliders->imagetitle = $request->imagetitle;
        $sliders->slidingimage = $name;
        $sliders->save();
        return redirect()->to('/sliders')->with('success','Successfull');
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
        $sliders = Sliders::find($id);
        return view('Backend.Sliders.edit',compact('sliders'));
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
        $sliders = Sliders::find($id);

        if(isset($request->slidingimage)){
            if($sliders->slidingimage && file_exists('slidesimage/'.$sliders->slidingimage)){
                unlink('slidesimage/'.$sliders->slidingimage );
            }
            $updateSlidingimage = time(). '.' .$request->slidingimage->extension();
            $request->slidingimage->move(public_path('/slidesimage/'),$updateSlidingimage);
            $sliders->slidingimage = $updateSlidingimage;

        }

        $sliders->imagetitle = $request->imagetitle;
        $sliders->save();
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
        $slidersDelete = Sliders::find($id);
        $slidersDelete->delete();
        return redirect()->back()->with('success','Delete Successfull');
    }



    //sliders status change function
    function statusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = Sliders::where("id", "=", $slider_id )->first()->status;
        if($slider_status == 1){
            Sliders::where("id", "=", $slider_id)->update(["status"=>0]);
        }
        elseif ($slider_status == 0){
            Sliders::where("id", "=", $slider_id)->update(["status"=>1]);
        }
        return $slider_id;
    }
}
