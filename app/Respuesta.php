<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'respuestas';

    protected $fillable = [
        'verdadero','empresa_respuesta_id','pregunta_id'
    ];

    public function empresaRespuesta(){
        return $this->belongsTo('App\EmpresaRespuesta','empresa_respuesta_id','id');
    }

    public function pregunta(){
        return $this->belongsTo('App\Pregunta','pregunta_id','id');
    }
}
