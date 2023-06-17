<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CompanySeeder::class,
            SlidersSeeder::class,
            CompanyExcellenceSeeder::class,
            JourneySeeder::class,
            CompanyGlobalSeeder::class,
            CompanyTeamSeeder::class,
            NewsEventsSeeder::class,
            AboutSeeder::class,
            AboutDetailsSeeder::class,
            BusinessTitleSeeder::class,
            BusinessDetailsSeeder::class,
            InvestorTitleSeeder::class,
            InvestorDetailsSeeder::class,
            GalleryTitleSeeder::class,
            GalleryDetailsSeeder::class,
            CompanyListSeeder::class,
            CompanyCategorySeeder::class,
            ContactusSeeder::class,
            SafetyTitleSeeder::class,
        ]);
    }
}
