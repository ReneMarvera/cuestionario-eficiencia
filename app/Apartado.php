<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartado extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'apartados';

    protected $fillable = [
        'nombre','cuestionario_id'
    ];

    public function cuestionario(){
        return $this->belongsTo('App\Cuestionario','cuestionario_id','id');
    }

    public function preguntas(){
        return $this->hasMany('App\Pregunta','apartado_id','id');
    }
    public function mensaje(){
        return $this->hasOne('App\Mensaje','apartado_id','id');
    }

}
