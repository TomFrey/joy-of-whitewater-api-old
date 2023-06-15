<?php

namespace Database\Seeders;

use App\Models\Kurs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kurs::factory()
            ->count(10)
            ->create();
    }
}
