<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Journey;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journeys = Journey::get();

        return view('Backend.Journey.index', compact('journeys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Journey.create');
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
            $request->image->move(public_path('/asset/journeyimage/'), $name);
        }



        $journey = new Journey();
        $journey->maintitle = $request->maintitle;
        $journey->firstsubtitle = $request->firstsubtitle;
        $journey->firstdescription = $request->firstdescription;
        $journey->secondsubtitle = $request->secondsubtitle;
        $journey->seconddescription = $request->seconddescription;
        $journey->thirdsubtitle = $request->thirdsubtitle;
        $journey->thirddescription = $request->thirddescription;
        $journey->image = $name;
        $journey->save();
        return redirect()->to('/journey')->with('success','Successfull');
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
        $journey = Journey::find($id);
        return view('Backend.Journey.edit',compact('journey'));
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
        $journey = Journey::find($id);

        if(isset($request->image)){
            if($journey->image && file_exists('/asset/journeyimage/'.$journey->image)){
                unlink('asset/journeyimage/'.$journey->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/journeyimage/'),$updateImage);
            $journey->image = $updateImage;

        }

        $journey->maintitle = $request->maintitle;
        $journey->firstsubtitle = $request->firstsubtitle;
        $journey->firstdescription = $request->firstdescription;
        $journey->secondsubtitle = $request->secondsubtitle;
        $journey->seconddescription = $request->seconddescription;
        $journey->thirdsubtitle = $request->thirdsubtitle;
        $journey->thirddescription = $request->thirddescription;
        $journey->save();
        return redirect()->to('/journey')->with('success','Update Successfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journeyDelete = Journey::find($id);
        $journeyDelete->delete();
        return redirect()->to('/journey')->with('success','Deleted');
    }


    //Journey status change function
    function journeyStatusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = Journey::where("id", "=", $slider_id )->first()->status;
        if($slider_status == 1){
            Journey::where("id", "=", $slider_id)->update(["status"=>0]);
        }
        elseif ($slider_status == 0){
            Journey::where("id", "=", $slider_id)->update(["status"=>1]);
        }
        return $slider_id;
    }
}
