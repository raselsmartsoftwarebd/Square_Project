<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InvestorDetails;

class InvestorDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investordetails = new InvestorDetails();

        $investordetails->title = 'Example Title';
        $investordetails->description = 'Example Description';
        $investordetails->image = 'Example Image';
        $investordetails->status = '1';

        $investordetails->save();
    }
}
