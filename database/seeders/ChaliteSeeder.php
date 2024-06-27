<?php

namespace Database\Seeders;

use App\Models\Chaliht;
use Illuminate\Database\Seeder;

class ChaliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chaliht::factory()->count(120)->create();

    }
}
