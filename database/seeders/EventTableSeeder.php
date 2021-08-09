<?php

namespace Database\Seeders;

use App\Models\EventSetting;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = [
           [
               "event_name" => "Mvp Name",
               "about" => "
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa
                erat
                nec dui. Nam at facilisis nulla.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa
                erat
                nec dui. Nam at facilisis nulla.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa
                erat
                nec dui. Nam at facilisis nulla.
                </p>
               ",
           ],
        ];

        EventSetting::insert($event);
    }
}
