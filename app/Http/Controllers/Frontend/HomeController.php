<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\CompanyExcellence;
use App\Models\Journey;
use App\Models\CompanyGlobal;
use App\Models\CompanyTeam;
use App\Models\NewsEvents;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders']            = Sliders::where('status', '1')->get();
        $data['companyexcellence']            = CompanyExcellence::get();
        $data['journeys']            = Journey::get();
        $data['companyglobal']            = CompanyGlobal::get();
        $data['companyteam']            = CompanyTeam::get();
        $data['newsevents']            = NewsEvents::where('status', '1')->get();
        return view('Frontend.Home.index', $data);
    }
}
