<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();
        $company->name = 'Example Name';
        $company->title = 'Example Title';
        $company->primary_phone = '0155555';
        $company->secondary_phone = '01888888';
        $company->hot_line = '999';
        $company->primary_email = 'example@gmail.com';
        $company->secondary_email = 'exampletwo@gmail.com';
        $company->primary_address = 'Basabo Dhaka';
        $company->secondary_address = 'Pantapath Dhaka';
        $company->website = 'example.com';
        $company->bin_no = '4444444';
        $company->meta_keyword = 'meta keyword';
        $company->meta_description = ' mete description';
        $company->favicon = 'Favicon';
        $company->logo = 'Logo';

        $company->save();
    }
}
