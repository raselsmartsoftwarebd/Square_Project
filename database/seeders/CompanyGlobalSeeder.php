<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanyGlobal;

class CompanyGlobalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyglobal = new CompanyGlobal();

        $companyglobal->title = 'Example Title';
        $companyglobal->leftDescription = 'Example Company Count';
        $companyglobal->rightDescription = 'Example Employee Count';
        $companyglobal->image = 'Example Image';
        $companyglobal->status = '1';

        $companyglobal->save();
    }
}
