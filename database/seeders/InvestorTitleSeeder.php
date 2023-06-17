<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InvestorTitle;

class InvestorTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investortitle = new InvestorTitle();

        $investortitle->title = 'Example Title';
        $investortitle->image = 'Example Image';
        $investortitle->save();
    }
}
