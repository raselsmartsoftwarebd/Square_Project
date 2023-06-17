<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SafetyDetails;

class SafetyDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $safetydetails = new SafetyDetails();

        $safetydetails->title = 'Example Title';
        $safetydetails->description = 'Example Description';
        $safetydetails->image = 'Example Image';
        $safetydetails->save();
    }
}
