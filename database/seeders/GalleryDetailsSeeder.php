<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GalleryDetails;

class GalleryDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallerydetails = new GalleryDetails();
        $gallerydetails->description = 'Example Description';
        $gallerydetails->image = 'Example Image';
        $gallerydetails->status = '1';

        $gallerydetails->save();
    }
}
