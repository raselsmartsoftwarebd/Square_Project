<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CommunityDetails;

class CommunityDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $communitydetails = new CommunityDetails();

        $communitydetails->title = 'Example Title';
        $communitydetails->description = 'Example Description';
        $communitydetails->image = 'Example Image';
        $communitydetails->save();
    }
}
