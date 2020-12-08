<?php

use Illuminate\Database\Seeder;
use App\Cuestionario;

class CuestionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuestionario::create([
    		'nombre'=>'Diagnostico en Industria Manufacturera: Gestión de Energía basada en ISO 50001'
    	]);
    }
}
