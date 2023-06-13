<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BusinessTitle;

class BusinessTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businesstitle = new BusinessTitle();

        $businesstitle->title = 'Example Title';
        $businesstitle->description = 'Example Description';
        $businesstitle->image = 'Example Image';
        $businesstitle->save();
    }
}
