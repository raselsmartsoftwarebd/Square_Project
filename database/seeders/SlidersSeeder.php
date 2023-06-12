<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sliders;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = new Sliders();

        $sliders->imagetitle = 'Example Title';
        $sliders->slidingimage = 'Sliders Image';
        $sliders->status = '1';

        $sliders->save();
    }
}
