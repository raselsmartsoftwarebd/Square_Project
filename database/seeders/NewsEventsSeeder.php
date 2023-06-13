<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NewsEvents;

class NewsEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsevents = new NewsEvents();

        $newsevents->title = 'Example Title';
        $newsevents->description = 'Example Description';
        $newsevents->image = 'Example Image';
        $newsevents->status = '1';
        $newsevents->save();
    }
}
