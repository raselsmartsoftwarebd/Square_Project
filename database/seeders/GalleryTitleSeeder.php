<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GalleryTitle;

class GalleryTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallerytitle = new GalleryTitle();

        $gallerytitle->title = 'Example Title';
        $gallerytitle->image = 'Example Image';
        $gallerytitle->save();
    }
}
