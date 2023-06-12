<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\CompanyController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CompanyinfoController;
use App\Http\Controllers\Backend\SlidersController;
use App\Http\Controllers\Backend\CompanyExcellenceController;
use App\Http\Controllers\Backend\JourneyController;
use App\Http\Controllers\Backend\CompanyGlobalController;


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
Route::get('/about', [FrontendController::class, 'about']);
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
















