<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\AboutDetails;
use App\Models\InvestorTitle;
use App\Models\InvestorDetails;
use App\Models\NewsEvents;
use App\Models\GalleryTitle;
use App\Models\GalleryDetails;
use App\Models\BusinessTitle;
use App\Models\BusinessDetails;
use App\Models\SafetyTitle;
use App\Models\SafetyDetails;
use App\Models\SafetyImage;
use App\Models\CommunityTitle;
use App\Models\CommunityDetails;


class FrontendController extends Controller
{


    //About
    public function about()
    {
        $data['abouttitle']            = About::get();
        $data['aboutdetails']            = AboutDetails::where('status', '1')->get();
        return view('Frontend.Pages.about', $data);
    }


    //Business
    public function business()
    {
        $data['businesstitle']            = BusinessTitle::get();
        $data['businessdetails']            = BusinessDetails::where('status', '1')->get();
        return view('Frontend.Pages.business', $data);
    }

    //Responsibility-> Safety
    public function safety()
    {
        $data['safetytitle']            = SafetyTitle::get();
        $data['safetydetails']            = SafetyDetails::get();
        $data['safetyimage']            = SafetyImage::get();
        return view('Frontend.Pages.Responsibility.safety', $data);
    }



    //Responsibility-> Community
    public function community()
    {
        $data['communitytitle']            = CommunityTitle::get();
        $data['communitydetails']            = CommunityDetails::get();

        return view('Frontend.Pages.Responsibility.community', $data);
    }

    // Investor
    public function investor()
    {
        $data['investortitle']            = InvestorTitle::get();
        $data['investordetails']            = InvestorDetails::where('status', '1')->get();
        return view('Frontend.Pages.investor', $data);
    }

    // News & Media
    public function newsMedia()
    {
        $data['newsevents']            = NewsEvents::where('status', '1')->get();
        return view('Frontend.Pages.news&media', $data);
    }


     // Gallery
     public function gallery()
     {

        $data['gallerytitle']            = GalleryTitle::get();
        $data['gallerydetails']            = GalleryDetails::where('status', '1')->get();
         return view('Frontend.Pages.gallery', $data);
     }

       // Contact
       public function contact()
       {
           return view('Frontend.Pages.contact');
       }




}
