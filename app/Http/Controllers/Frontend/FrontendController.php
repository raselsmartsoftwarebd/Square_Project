<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    //About
    public function about()
    {
        return view('Frontend.Pages.about');
    }


    //Business
    public function business()
    {
        return view('Frontend.Pages.business');
    }

    //Responsibility-> Safety
    public function safety()
    {
        return view('Frontend.Pages.Responsibility.safety');
    }

    //Responsibility-> Environment
    public function environment()
    {
        return view('Frontend.Pages.Responsibility.environment');
    }

    //Responsibility-> employee
    public function employee()
    {
        return view('Frontend.Pages.Responsibility.employee');
    }

    //Responsibility-> Community
    public function community()
    {
        return view('Frontend.Pages.Responsibility.community');
    }

    // Investor
    public function investor()
    {
        return view('Frontend.Pages.investor');
    }

    // News & Media
    public function newsMedia()
    {
        return view('Frontend.Pages.news&media');
    }


     // Gallery
     public function gallery()
     {
         return view('Frontend.Pages.gallery');
     }

       // Contact
       public function contact()
       {
           return view('Frontend.Pages.contact');
       }




}
