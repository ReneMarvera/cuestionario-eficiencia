<?php

use Illuminate\Database\Seeder;
use App\Apartado;

class ApartadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apartado::create([
    		'nombre'=>'Requisitos Generales',
            'cuestionario_id'=>1
    	]);
        Apartado::create([
            'nombre'=>'Contexto Organizacional',
            'cuestionario_id'=>1
        ]);
        Apartado::create([
            'nombre'=>'Liderazgo',
            'cuestionario_id'=>1
        ]);    	
    	Apartado::create([
    		'nombre'=>'Planificación',
            'cuestionario_id'=>1
    	]);
    	Apartado::create([
    		'nombre'=>'Apoyo',
            'cuestionario_id'=>1
    	]);
    	Apartado::create([
    		'nombre'=>'Operación',
            'cuestionario_id'=>1
    	]);
    	Apartado::create([
    		'nombre'=>'Evaluación de desempeño',
            'cuestionario_id'=>1
    	]);
    	Apartado::create([
    		'nombre'=>'Mejora',
            'cuestionario_id'=>1
    	]);

    
    }
}