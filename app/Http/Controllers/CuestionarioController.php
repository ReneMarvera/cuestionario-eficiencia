<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartado;
use App\Cuestionario;
use App\Empresa;
use App\EmpresaRespuesta;
use App\Pregunta;
use App\Respuesta;
use View;

class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $cuestionario = Cuestionario::find(1);
        $apartados = $cuestionario->apartados;
        // dd($cuestionario);
        return view('encuesta',compact('apartados','cuestionario'));
    }

    public function generarResultados(Request $request){

        $cuestionario = Cuestionario::find(1);
        $empresa = Empresa::create(['nombre'=>$request->empresaNombre]);
        $apartados = $cuestionario->apartados;
        $mensajes = [];

        $empresaRespuesta = EmpresaRespuesta::create([
            'empresa_id' => $empresa->id,
            'cuestionario_id' => $cuestionario->id
        ]);

        foreach ($apartados as $apartado){

            $preguntas = $apartado->preguntas;
            $cantidadPreguntasApartado = count($preguntas);
            $cantidadPreguntasPositivas = 0;
            $cantidadPreguntasNegativas = 0;

            foreach ($preguntas as $pregunta){
                $respuesta = new Respuesta();                
                $respuesta->empresa_respuesta_id = $empresa->id;
                $respuesta->pregunta_id = $pregunta->id;

                //Definiedo si es Si o No
                if($request['respuesta'.$pregunta->id] == "1"){
                    $cantidadPreguntasPositivas++;
                }else{
                    $cantidadPreguntasNegativas++;
                }
            }

            if($cantidadPreguntasPositivas>$cantidadPreguntasNegativas){
                $mensajes[$apartado->id] = "1";
            }else{
                $mensajes[$apartado->id] = "0";
            }


        }

        return view('resultados',compact('mensajes','apartados','empresa'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
