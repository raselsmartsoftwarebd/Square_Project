<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\CompanyController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CompanyinfoController;
use App\Http\Controllers\Backend\CompanyListController;
use App\Http\Controllers\Backend\CompanyCategoryController;
use App\Http\Controllers\Backend\SlidersController;
use App\Http\Controllers\Backend\CompanyExcellenceController;
use App\Http\Controllers\Backend\JourneyController;
use App\Http\Controllers\Backend\CompanyGlobalController;
use App\Http\Controllers\Backend\CompanyTeamController;
use App\Http\Controllers\Backend\NewsEventsController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AboutDetailsController;
use App\Http\Controllers\Backend\BusinessTitleController;
use App\Http\Controllers\Backend\SafetyTitleController;
use App\Http\Controllers\Backend\SafetyDetailsController;
use App\Http\Controllers\Backend\SafetyImageController;
use App\Http\Controllers\Backend\CommunityTitleController;
use App\Http\Controllers\Backend\CommunityDetailsController;
use App\Http\Controllers\Backend\BusinessDetailsController;
use App\Http\Controllers\Backend\InvestorTitleController;
use App\Http\Controllers\Backend\InvestorDetailsController;
use App\Http\Controllers\Backend\GalleryTitleController;
use App\Http\Controllers\Backend\GalleryDetailsController;
use App\Http\Controllers\Backend\ContactusController;
use App\Http\Controllers\Backend\ContactmailController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend

//Home Controller Routes For Home Page
Route::get('/', [HomeController::class, 'index']);

//FrontendController Routes For All pages Routes
Route::get('/about/section', [FrontendController::class, 'about']);
Route::get('/business', [FrontendController::class, 'business']);

Route::get('/safety', [FrontendController::class, 'safety']);
Route::get('/environment', [FrontendController::class, 'environment']);
Route::get('/employee', [FrontendController::class, 'employee']);
Route::get('/community', [FrontendController::class, 'community']);

Route::get('/investor', [FrontendController::class, 'investor']);
Route::get('/news/media', [FrontendController::class, 'newsMedia']);
Route::get('/gallery', [FrontendController::class, 'gallery']);
Route::get('/contact', [FrontendController::class, 'contact']);



//Backend

//Admin Dashboard Controller Routes
Route::get('/admin/dashboard', [AdminController::class, 'index']);

//Companyinfo Controller
Route::resource('company', CompanyinfoController::class);

//CompanyList Controller
Route::resource('companylist', CompanyListController::class);

//CompanyCategory Controller
Route::resource('companycategory', CompanyCategoryController::class);

//SliderController Routes
Route::resource('sliders', SlidersController::class);
Route::post('/change_status', [SlidersController::class, 'statusChange']); //Slider status change routes


//CompanyExcellence Routes
Route::resource('companyexcellence', CompanyExcellenceController::class);
Route::post('/change_excellence_status', [CompanyExcellenceController::class, 'excellenceStatusChange']);

//Journey Routes
Route::resource('journey', JourneyController::class);
Route::post('/journey_status', [JourneyController::class, 'journeyStatusChange']);

//CompanyGlobal Routes
Route::resource('companyglobal', CompanyGlobalController::class);
Route::post('/change_global_status', [CompanyGlobalController::class, 'globalStatusChange']);

//CompanyTeamRoutes
Route::resource('companyteam', CompanyTeamController::class);
Route::resource('companyteam/1/edit', CompanyTeamController::class);


//NewsEvents Routes
Route::resource('newsevents', NewsEventsController::class);
Route::post('/change_events_status', [NewsEventsController::class, 'eventsStatusChange']);

//AboutTitle
Route::resource('about', AboutController::class);
Route::get('about/aboutedit/{id}', [AboutController::class, 'aboutedit']); //for edit, id sidebar theke /1 diye dhorano

//AboutDetails
Route::resource('aboutdetails', AboutDetailsController::class);
Route::post('/change_about_details_status', [AboutDetailsController::class, 'statusChange']);

//BusinessTite
Route::resource('businesstitle', BusinessTitleController::class);
Route::get('businesstitle/titleedit/{id}', [BusinessTitleController::class, 'titleedit']);

//Responsibility SafetyTitle
Route::resource('safetytitle', SafetyTitleController::class);
Route::get('safetytitle/titleedit/{id}', [SafetyTitleController::class, 'titleedit']);

//Responsibility SafetyDetails
Route::resource('safetydetails', SafetyDetailsController::class);
Route::get('safetydetails/detailsedit/{id}', [SafetyDetailsController::class, 'detailsedit']);

//Responsibility SafetyImage
Route::resource('safetyimage', SafetyImageController::class);
Route::get('safetyimage/imageedit/{id}', [SafetyImageController::class, 'imageedit']);

//Responsibility CommunityTitle
Route::resource('communitytitle', CommunityTitleController::class);
Route::get('communitytitle/titleedit/{id}', [CommunityTitleController::class, 'titleedit']);

//Responsibility CommunityDetails
Route::resource('communitydetails', CommunityDetailsController::class);
Route::get('communitydetails/detailsedit/{id}', [CommunityDetailsController::class, 'detailsedit']);


//AboutDetails
Route::resource('businessdetails', BusinessDetailsController::class);
Route::post('/change_business_details_status', [BusinessDetailsController::class, 'statusChange']);

//InvestorTite
Route::resource('investortitle',InvestorTitleController::class);
Route::get('investortitle/titleedit/{id}', [InvestorTitleController::class, 'titleedit']);


//InvestorDetails
Route::resource('investordetails', InvestorDetailsController::class);
Route::post('/change_investor_details_status', [InvestorDetailsController::class, 'statusChange']);


//NewsMediaTitle
Route::resource('gallerytitle',GalleryTitleController::class);
Route::get('gallerytitle/titleedit/{id}', [GalleryTitleController::class, 'titleedit']);

//GalleryDetails
Route::resource('gallerydetails', GalleryDetailsController::class);
Route::post('/change_gallery_details_status', [GalleryDetailsController::class, 'statusChange']);

//Contactus Info
Route::resource('contactus',ContactusController::class);
Route::get('contactus/contactinfo/{id}', [ContactusController::class, 'contactinfo']);

//contactmail
Route::post('/contact/mail', [ContactmailController::class, 'contactmail']);





















