<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsEvents;

class NewsEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsevents = NewsEvents::get();
        return view('Backend.NewsEvents.index', compact('newsevents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.NewsEvents.create');
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
            $request->image->move(public_path('/asset/eventsimage/'), $name);
        }

        $newsevents = new NewsEvents();
        $newsevents->title = $request->title;
        $newsevents->description = $request->description;
        $newsevents->image = $name;
        $newsevents->save();
        return redirect()->to('/newsevents')->with('success','Insert Successfull');
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
        $newsevents = NewsEvents::find($id);
        return view('Backend.NewsEvents.edit',compact('newsevents'));
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
        $newsevents = NewsEvents::find($id);

        if(isset($request->image)){
            if($newsevents->image && file_exists('asset/eventsimage/'.$newsevents->image)){
                unlink('asset/eventsimage/'.$newsevents->image );
            }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/asset/eventsimage/'),$updateImage);
            $newsevents->image = $updateImage;

        }

        $newsevents->title = $request->title;
        $newsevents->description = $request->description;
        $newsevents->save();
        return redirect()->to('/newsevents')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newseventsDelete = NewsEvents::find($id);
        $newseventsDelete->delete();
        return redirect()->to('/newsevents')->with('success','Deleted');
    }


     //NewsEvents status change
     function eventsStatusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = NewsEvents::where("id", "=", $slider_id )->first()->status;
        if($slider_status == 1){
            NewsEvents::where("id", "=", $slider_id)->update(["status"=>0]);
        }
        elseif ($slider_status == 0){
            NewsEvents::where("id", "=", $slider_id)->update(["status"=>1]);
        }
        return $slider_id;
    }
}
