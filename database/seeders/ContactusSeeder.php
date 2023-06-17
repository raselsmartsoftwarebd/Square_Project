<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contactus;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactus = new Contactus();

        $contactus->title = 'Example Title';
        $contactus->subtitle = 'Example Sub-Title';
        $contactus->description = 'Example Description';
        $contactus->image = 'Example Image';
        $contactus->save();
    }
}
