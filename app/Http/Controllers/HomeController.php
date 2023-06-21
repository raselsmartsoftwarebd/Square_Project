<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admindashboard()
    {


        $countcompany = DB::table('company_lists')->count();
        $countbusiness = DB::table('business_details')->count();
        $countnews = DB::table('news_events')->count();


        return view('Backend.Home.index')->with([
            'countcompany' => $countcompany,
            'countbusiness' => $countbusiness,
            'countnews' => $countnews,

        ]);
    }
}
