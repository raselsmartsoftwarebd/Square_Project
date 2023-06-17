<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CommunityTitle;

class CommunityTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $communitytitle = new CommunityTitle();

        $communitytitle->title = 'Example Title';
        $communitytitle->description = 'Example Description';
        $communitytitle->image = 'Example Image';
        $communitytitle->save();
    }
}
