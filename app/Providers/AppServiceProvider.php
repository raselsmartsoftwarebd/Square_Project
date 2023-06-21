<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $countcompany = DB::table('company_lists')->count();
        $countbusiness = DB::table('business_details')->count();
        $countnews = DB::table('news_events')->count();

        View::share([
            'countcompany' => $countcompany,
            'countbusiness' => $countbusiness,
            'countnews' => $countnews,
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($header){
            $header->with('companyinfo', Company::get());

        });
    }


}
