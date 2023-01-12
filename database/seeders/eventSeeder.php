<?php

namespace Database\Seeders;

use App\Models\events;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        events::create([
            'event_id' => 1,
            'event_name' => 'Code-Combat',
            'team_size' => 1,
            'amount' => '200'
        ]);

        events::create([
            'event_id' => 2,
            'event_name' => 'Debugging',
            'team_size' => 1,
            'amount' => '200'
        ]);

        events::create([

            'event_id' => 3,
            'event_name' => 'Gaming',
            'team_size' => 1,
            'amount' => '50'
        ]);

        events::create([

            'event_id' => 3,
            'event_name' => 'Gaming',
            'team_size' => 2,
            'amount' => '100'
        ]);

        events::create([

            'event_id' => 3,
            'event_name' => 'Gaming',
            'team_size' => 3,
            'amount' => '100'
        ]);

        events::create([

            'event_id' => 3,
            'event_name' => 'Gaming',
            'team_size' => 4,
            'amount' => '100'
        ]);

        events::create([
            'event_id' => 4,
            'event_name' => 'Hackathon',
            'team_size' => 2,
            'amount' => '350'
        ]);

        events::create([
            'event_id' => 4,
            'event_name' => 'Hackathon',
            'team_size' => 3,
            'amount' => '350'
        ]);

        events::create([

            'event_id' => 4,
            'event_name' => 'Hackathon',
            'team_size' => 4,
            'amount' => '350'
        ]);

        events::create([
            'event_id' => 5,
            'event_name' => 'Memegram',
            'team_size' => 1,
            'amount' => '0'
        ]);


        events::create([
            'event_id' => 6,
            'event_name' => 'Paper-Presentation',
            'team_size' => 1,
            'amount' => '200'
        ]);

        events::create([
            'event_id' => 6,
            'event_name' => 'Paper-Presentation',
            'team_size' => 2,
            'amount' => '300'
        ]);


        events::create([
            'event_id' => 7,
            'event_name' => 'Natyakshetra',
            'team_size' => 1,
            'amount' => '200'
        ]);


        events::create([
            'event_id' => 7,
            'event_name' => 'Natyakshetra',
            'team_size' => 2,
            'amount' => '350'
        ]);


        events::create([
            'event_id' => 7,
            'event_name' => 'Natyakshetra',
            'team_size' => 3,
            'amount' => '500'
        ]);


        events::create([
            'event_id' => 7,
            'event_name' => 'Natyakshetra',
            'team_size' => 4,
            'amount' => '500'
        ]);

        events::create([
            'event_id' => 7,
            'event_name' => 'Natyakshetra',
            'team_size' => 5,
            'amount' => '500'
        ]);

        events::create([
            'event_id' => 8,
            'event_name' => 'Quiz',
            'team_size' => 2,
            'amount' => '250'
        ]);

        events::create([
            'event_id' => 8,
            'event_name' => 'Quiz',
            'team_size' => 3,
            'amount' => '300'
        ]);

    }
}
