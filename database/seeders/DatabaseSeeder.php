<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use App\Models\Transporte;
use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Customer;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
       /* $customer= new Customer();
        $customer->name='Jorge Morales';
        $customer->address='Avenida las americas';
        $customer->phone_number='502 12345678';
        $customer->save();*/
       // $this->call(CustomerSeeder::class);

        $proveedor = new Proveedor();
        $proveedor->codigo_proveedor='ABC12345';
        $proveedor->nombre_proveedor='Proveedor 3';
        $proveedor->direccion='Morales';
        $proveedor->telefono_celular='794845467';
        $proveedor->save();

        $this->call(TransporteSeeder::class);
        $this->call(CamionSeeder::class);


    }
}
