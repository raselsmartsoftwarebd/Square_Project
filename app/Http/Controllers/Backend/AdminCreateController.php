<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admindetails = User::get();
        return view('Backend.AdminCreate.index', compact('admindetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.AdminCreate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = '1';
        $user->save();

        return redirect()->to('/adminmanage')->with('success', 'Insert Successful');
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
        $admindetails = User::find($id);
        return view('Backend.AdminCreate.edit',compact('admindetails'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = '1';
        $user->save();
        return redirect()->to('/admincreate')->with('success', 'Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admindetails = User::find($id);
        $admindetails->delete();
        return redirect()->to('/admincreate')->with('success','Deleted');
    }

    //GalleryDetailsStatus Change
    function statusChange(Request $request){
        $slider_id = $request->input("ID");
        $slider_status = User::where("id", "=", $slider_id )->first()->is_admin;
        if($slider_status == 1){
            User::where("id", "=", $slider_id)->update(["is_admin"=>0]);
        }
        elseif ($slider_status == 0){
            User::where("id", "=", $slider_id)->update(["is_admin"=>1]);
        }
        return $slider_id;
    }
}
