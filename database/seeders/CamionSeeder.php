<?php

namespace Database\Seeders;

use App\Models\Camion;
use Illuminate\Database\Seeder;

class CamionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Camion::factory(100)->create();
    }
}
