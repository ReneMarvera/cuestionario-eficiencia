<?php

use Illuminate\Database\Seeder;
use App\Mensaje;

class MensajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensaje::create([
    		'contenido'=>'
            <span class="font-weight-bold">Prestar atención a</span>:
            <br>- Sistemas de Gestión existentes en la industria.
            <br>- El nivel de avance en la puesta en marcha de la Mejora continua
            <br>- Aumentar los Conocimientos sobre Eficiencia Energética de los colaboradores.',
    		'apartado_id'=>1
    	]);
    	Mensaje::create([
    		'contenido'=>'
            <span class="font-weight-bold">Tomar las siguientes acciones</span>:
            <br>- Determinar los factores externos e internos.
            <br>- Determinar requisitos legales aplicables
            <br>- Determinar el alcance del sistema de gestión de la energía 
            <br>- Determinar los procesos productivos indispensables.',
    		'apartado_id'=>2
    	]);
    	Mensaje::create([
    		'contenido'=>'
            <span class="font-weight-bold">Poner en práctica</span>:
            <br>- Aumentar el compromiso de Alta Dirección
            <br>- Crear o revisar la Política energética.
            <br>- Determinar los roles, responsabilidades y autoridades en la organización.',
    		'apartado_id'=>3
    	]);
    	Mensaje::create([
    		'contenido'=>'
            <span class="font-weight-bold">Determinar acciones para abordar los riesgos y las oportunidade</span>s
            <br>- Desarrollar objetivos, metas energéticas y la planificación para lograrlos. 
            <br>- Realizar la revisión energética. 
            <br>- Crear Indicadores de desempeño energético. 
            <br>- Determinar la Línea de base energética. 
            <br>- Llevar a cabo la planificación para la recopilación de datos de la energía. 
            ',
    		'apartado_id'=>4
    	]);
    	Mensaje::create([
    		'contenido'=>'
            <span class="font-weight-bold">Establecer</span>:
            <br>- Recursos. 
            <br>- Competencias.
            <br>- Toma de conciencia. 
            <br>- Determinar el sistema de comunicación. 
            <br>- Llevar Información documentada.
            <br>- Crear, actualizar y Controlar la información documentada.',
    		'apartado_id'=>5
    	]);
    	Mensaje::create([
    		'contenido'=>'
            <span class="font-weight-bold">Llevar a cabo</span>:
            <br>- La Planificación y control operacional. 
            <br>- Diseño del Sistema de Gestión de la energía de acuerdo a los procesos y operaciones propios de la industria.
            <br>- Crear una política de Adquisición, para equipos y maquinaria con eficiencia Energética.',
    		'apartado_id'=>6
    	]);
    	Mensaje::create([
    		'contenido'=>'
            <span class="font-weight-bold">Realizar las siguientes recomendaciones</span>:
            <br>- Seguimiento, medición, análisis y evaluación del desempeño energético y del SGEn.
            <br>- Auditoría interna. 
            <br>- Revisión por la dirección.',
    		'apartado_id'=>7
    	]);
    	Mensaje::create([
    		'contenido'=>'
            <span class="font-weight-bold">Realizar de manera periódica</span>:
            <br>- Revisión de No conformidades.
            <br>- Acciones correctivas/ preventivas.
            <br>- Desarrollar Mejora continua.',
    		'apartado_id'=>8
    	]);
    }
}
