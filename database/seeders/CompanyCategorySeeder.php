<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanyCategory;

class CompanyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companycategory = new CompanyCategory();

        $companycategory->name = 'Example Name';
        $companycategory->company_list_id = '1';

        $companycategory->save();
    }
}
