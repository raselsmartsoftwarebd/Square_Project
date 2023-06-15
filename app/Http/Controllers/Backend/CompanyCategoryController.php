<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyList;
use App\Models\CompanyCategory;

class CompanyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companycategory = CompanyCategory::with('company_list')->get();
        return view('Backend.CompanyCategory.index', compact('companycategory'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = CompanyList::get();
        return view('Backend.CompanyCategory.create', compact('companies'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companycategory = new CompanyCategory();
        $companycategory->company_list_id = $request->company_list_id;
        $companycategory->name = $request->name;
        $companycategory->save();
        return redirect()->to('/companycategory')->with('success','Inserted');

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
        $companycategory = CompanyCategory::findOrFail($id);
        $companies = CompanyList::get();
        return view('Backend.CompanyCategory.edit', compact('companycategory', 'companies'));
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
        $companycategory = CompanyCategory::findOrFail($id);
        $companycategory->company_list_id = $request->company_list_id;
        $companycategory->name = $request->name;
        $companycategory->save();
        return redirect()->to('/companycategory')->with('success', 'Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companycategory = CompanyCategory::findOrFail($id);
        $companycategory->delete();
        return redirect()->to('/companycategory')->with('success', 'Deleted');
    }
}
