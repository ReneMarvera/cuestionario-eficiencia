<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaRespuesta extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'empresas_respuestas';

    protected $fillable = [
        'empresa_id','cuestionario_id'
    ];

    public function empresa(){
        return $this->belongsTo('App\Empresa','empresa_id','id');
    }

    public function cuestionario(){
        return $this->belongsTo('App\Cuestionario','cuestionario_id','id');
    }

    public function respuestas(){
        return $this->hasMany('App\Respuesta','empresa_respuesta_id','id');
    }
}
