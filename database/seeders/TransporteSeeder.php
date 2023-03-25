<?php

namespace Database\Seeders;

use App\Models\Transporte;
use Illuminate\Database\Seeder;

class TransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transporte::factory(100)->create();
    }
}
