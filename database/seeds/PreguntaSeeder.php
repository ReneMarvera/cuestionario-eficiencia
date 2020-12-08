<?php

use Illuminate\Database\Seeder;
use App\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pregunta::create([
    		'pregunta'=>'¿Se cuenta dentro de la empresa con un Sistema de Gestión basado en una Norma ISO, ya sea de calidad, Seguridad Ocupacional, Ambiental, etc.?',
    		'apartado_id'=>1
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se cuenta dentro de la empresa con un Sistema de Gestión basado en otro tipo de normativa diferentes a las ISO, ya sea de calidad, Seguridad Ocupacional, Ambiental, etc.?',
    		'apartado_id'=>1
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se tiene conocimiento dentro de su organización sobre la metodología de Mejora Continua (Kaizen) conocida también como Circulo de Deming?',
    		'apartado_id'=>1
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se pone en practica la metodología de mejora continua o similares dentro de su organización, especialmente dentro de la planta?',
    		'apartado_id'=>1
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se tienen conocimientos al menos básicos sobre eficiencia energética?',
    		'apartado_id'=>1
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se ha creado, documentado, implementado un Sistema de Gestión de la Energía (SGEn) basado en la Norma ISO 50001?',
    		'apartado_id'=>1
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se han determinado los requisitos a cumplir como organización para lograr la mejora continua del desempeño energético y del Sistema de Gestión de la Energía?',
    		'apartado_id'=>1
    	]);

    	Pregunta::create([
    		'pregunta'=>'¿Se han logrado determinar los factores externos e internos que afectan en los procesos productivos para lograr los resultados previstos y mejoras en el desempeño energético?',
    		'apartado_id'=>2
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se han determinado los requerimientos legales aplicables referentes al consumo energético?',
    		'apartado_id'=>2
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se ha determinado el alcance y límites del sistema de gestión de la energía considerando los elementos externos e internos que afectan la industria?',
    		'apartado_id'=>2
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se ha definido política una política energética en la industria?',
    		'apartado_id'=>2
    	]);

    	Pregunta::create([
    		'pregunta'=>'¿Existe un compromiso de parte de la alta dirección con respecto a la mejora continua en materia energética?',
    		'apartado_id'=>3
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se han establecido la política energética adecuadas a los propósitos de la industria?',
    		'apartado_id'=>3
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Existe el compromiso de la alta dirección de satisfacer los requisitos legales relacionados con la eficiencia energética?',
    		'apartado_id'=>3
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se manifiesta interés de parte de los líderes de adquirir productos y servicios de eficiencia energética?',
    		'apartado_id'=>3
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La alta dirección asegura los roles, responsabilidades y autoridad en la organización en materia de eficiencia energética?',
    		'apartado_id'=>3
    	]);

    	Pregunta::create([
    		'pregunta'=>'¿La planificación es consistente con la política energética y se considera que conducen a acciones que dan como resultado la mejora continua en materia energética?',
    		'apartado_id'=>4
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se han establecido objetivos y metas en materia energética?',
    		'apartado_id'=>4
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se han establecido planes de acción que incluyan métodos de verificación y evaluación para lograr los objetivos y metas establecidas?',
    		'apartado_id'=>4
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La industria ha desarrollado un plan de revisión energética?',
    		'apartado_id'=>4
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La industria ha establecido indicadores de desempeño energético?',
    		'apartado_id'=>4
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La industria ha establecido la línea base energética?',
    		'apartado_id'=>4
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se ha establecido la planificación para la recopilación de datos de la energía a través de equipos de medición y características principales para la organización?',
    		'apartado_id'=>4
    	]);

    	Pregunta::create([
    		'pregunta'=>'¿La industria ha proporcionado los recursos necesarios para establecer, implementar, mantener y mejorar continuamente el desempeño energético?',
    		'apartado_id'=>5
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La industria ha determinado las competencias necesarias que debe poseer el personal sobre la base de formación apropiada, la capacitación, habilidades o experiencias y evaluar la eficacia de las acciones adoptadas?',
    		'apartado_id'=>5
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Las personas son conscientes de trabajo que realizan en materia energética y conocen la política energética establecida?',
    		'apartado_id'=>5
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Ha determinado la organización la comunicación interna y externa que son pertinentes al SGEn?',
    		'apartado_id'=>5
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se ha establecido la información que se va a documentar?',
    		'apartado_id'=>5
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se ha definido el mecanismo para crear y actualiza la información que se ha documentado?',
    		'apartado_id'=>5
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Se ha establecido el mecanismo se control de la información documentada, así como su utilización de manera adecuada?',
    		'apartado_id'=>5
    	]);

    	Pregunta::create([
    		'pregunta'=>'¿La industria ha establecido la planificación y el control operacional en todas sus áreas en materia energética?',
    		'apartado_id'=>6
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La industria ha considerado oportunidades de mejora de desempeño energético y el control operacional en el diseño de instalaciones, equipos, sistemas y procesos que utilizan energía?',
    		'apartado_id'=>6
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La organización ha establecido criterios para la evaluación de desempeño energético durante el tiempo de vida operativo y planificado o esperado al adquirir productos, equipos y servicios que utilizan energía?',
    		'apartado_id'=>6
    	]);

    	Pregunta::create([
    		'pregunta'=>'¿La organización ha determinado mecanismo de seguimiento, medición, análisis, y evaluación del desempeño energético?',
    		'apartado_id'=>7
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿Ha determinado que necesita seguimiento y que necesita ser medido?',
    		'apartado_id'=>7
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La organización ha planificado y establecido los intervalos adecuados para realizar auditorías internas?',
    		'apartado_id'=>7
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La alta dirección ha establecido intervalos de revisión de manera idónea, adecuad, eficiente de manera estratégica en materia energética?',
    		'apartado_id'=>7
    	]);

    	Pregunta::create([
    		'pregunta'=>'¿La organización reacciona de manera adecuada ante las no conformidades?',
    		'apartado_id'=>8
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La organización ha establecido un plan de acciones correctivas cuando se requiera?',
    		'apartado_id'=>8
    	]);
    	Pregunta::create([
    		'pregunta'=>'¿La organización ha establecido de manera adecuada la mejora continua del desempeño energético?',
    		'apartado_id'=>8
    	]);

    }
}
