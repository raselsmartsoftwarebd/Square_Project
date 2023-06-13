<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutDetails;

class AboutDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aboutdetails = new AboutDetails();

        $aboutdetails->title = 'Example Title';
        $aboutdetails->description = 'Example Description';
        $aboutdetails->image = 'Example Image';
        $aboutdetails->status = '1';

        $aboutdetails->save();
    }
}
