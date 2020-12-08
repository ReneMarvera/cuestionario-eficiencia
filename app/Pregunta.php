<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'preguntas';

    protected $fillable = [
        'pregunta','apartado_id'
    ];

    public function apartado(){
        return $this->belongsTo('App\Apartado','apartado_id','id');
    }

    public function respuestas(){
        return $this->hasMany('App\Respuesta','pregunta_id','id');
    }
}
