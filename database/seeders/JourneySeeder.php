<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Journey;

class JourneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $journey = new Journey();

        $journey->maintitle = 'Example Title';

        $journey->firstsubtitle = 'Example First Subtitle';
        $journey->firstdescription = 'Example First Description';

        $journey->secondsubtitle = 'Example Second Subtitle';
        $journey->seconddescription = 'Example Second Description';

        $journey->thirdsubtitle = 'Example Third Subtitle';
        $journey->thirddescription = 'Example Third Description';

        $journey->image = 'Example Image';

        $journey->status = '1';

        $journey->save();
    }
}
