<?php

namespace Database\Seeders;

use App\Models\Time;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            ['time_slot' => '06:00 - 07:00'],
            ['time_slot' => '07:00 - 08:00'],
            ['time_slot' => '08:00 - 09:00'],
            ['time_slot' => '09:00 - 10:00'],
            ['time_slot' => '10:00 - 11:00'],
            ['time_slot' => '11:00 - 12:00'],
            ['time_slot' => '12:00 - 13:00'],
            ['time_slot' => '13:00 - 14:00'],
            ['time_slot' => '14:00 - 15:00'],
            ['time_slot' => '15:00 - 16:00'],
            ['time_slot' => '16:00 - 17:00'],
            ['time_slot' => '17:00 - 18:00'],
            ['time_slot' => '18:00 - 19:00'],
            ['time_slot' => '19:00 - 20:00'],
            ['time_slot' => '20:00 - 21:00'],
            ['time_slot' => '21:00 - 22:00'],
            ['time_slot' => '22:00 - 23:00'],
            ['time_slot' => '23:00 - 24:00'],
        ];
        foreach ($userData as $key => $val) {
            Time::create($val);
        }
    }
}
