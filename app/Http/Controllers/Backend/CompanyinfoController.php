<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::get();

        return view('Backend.Company.manage', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('favicon')){
            $fav = time(). '.' .$request->favicon->extension();
            $request->favicon->move(public_path('/favicon/'), $fav);
        }

        if($request->file('logo')){
            $name = time(). '.' .$request->logo->extension();
            $request->logo->move(public_path('/avatar/'), $name);
        }

        $company = new Company();
        $company->name = $request->name;
        $company->title = $request->title;
        $company->primary_phone = $request->primary_phone;
        $company->secondary_phone = $request->secondary_phone;
        $company->hot_line = $request->hot_line;
        $company->primary_email = $request->primary_email;
        $company->secondary_email = $request->secondary_email;
        $company->primary_address = $request->primary_address;
        $company->secondary_address = $request->secondary_address;
        $company->website = $request->website;
        $company->bin_no = $request->bin_no;
        $company->meta_keyword = $request->meta_keyword;
        $company->meta_description = $request->meta_description;
        $company->favicon = $fav;
        $company->logo = $name;
        $company->save();
        return redirect()->back()->with('success','Successfull');
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
        $company = Company::find($id);
        return view('backend.company.edit',compact('company'));
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
        $company = Company::find($id);

        if(isset($request->favicon)){
            if($company->favicon && file_exists('favicon/'.$company->favicon)){
                unlink('favicon/'.$company->favicon );
            }
            $updateFavicon = time(). '.' .$request->favicon->extension();
            $request->favicon->move(public_path('/favicon/'),$updateFavicon);
            $company->favicon = $updateFavicon;

        }

        if(isset($request->logo)){
            if($company->logo && file_exists('avatar/'.$company->logo)){
                unlink('avatar/'.$company->logo );
            }
            $updateLogo = time(). '.' .$request->logo->extension();
            $request->logo->move(public_path('/avatar/'),$updateLogo);
            $company->logo = $updateLogo;

        }

        $company->name = $request->name;
        $company->title = $request->title;
        $company->primary_phone = $request->primary_phone;
        $company->secondary_phone = $request->secondary_phone;
        $company->hot_line = $request->hot_line;
        $company->primary_email = $request->primary_email;
        $company->secondary_email = $request->secondary_email;
        $company->primary_address = $request->primary_address;
        $company->secondary_address = $request->secondary_address;
        $company->website = $request->website;
        $company->bin_no = $request->bin_no;
        $company->meta_keyword = $request->meta_keyword;
        $company->meta_description = $request->meta_description;
        $company->save();
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
