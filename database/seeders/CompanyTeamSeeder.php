<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanyTeam;

class CompanyTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyteam = new CompanyTeam();

        $companyteam->title = 'Example Title';
        $companyteam->description = 'Example Description';
        $companyteam->image = 'Example Image';
        $companyteam->save();
    }
}
