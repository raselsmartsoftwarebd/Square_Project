<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BusinessDetails;

class BusinessDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businessdetails = new BusinessDetails();

        $businessdetails->title = 'Example Title';
        $businessdetails->description = 'Example Description';
        $businessdetails->image = 'Example Image';
        $businessdetails->status = '1';

        $businessdetails->save();
    }
}
