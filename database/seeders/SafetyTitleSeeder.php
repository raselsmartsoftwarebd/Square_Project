<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SafetyTitle;

class SafetyTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $safetytitle = new SafetyTitle();

        $safetytitle->title = 'Example Title';
        $safetytitle->description = 'Example Description';
        $safetytitle->image = 'Example Image';
        $safetytitle->save();
    }
}
