<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'cuestionarios';

    protected $fillable = [
        'nombre'
    ];

    public function empresaRespuestas(){
        return $this->hasMany('App\EmpresaRespuesta','cuestionario_id','id');
    }

    public function apartados(){
    	return $this->hasMany('App\Apartado','cuestionario_id','id');
    }
}
