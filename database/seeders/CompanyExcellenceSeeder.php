<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanyExcellence;

class CompanyExcellenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyexcellence = new CompanyExcellence();

        $companyexcellence->title = 'Example Title';
        $companyexcellence->description = 'Example Description';
        $companyexcellence->image = 'Example Image';
        $companyexcellence->status = '1';

        $companyexcellence->save();
    }
}
