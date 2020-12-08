<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'mensajes';

    protected $fillable = [
        'contenido','apartado_id'
    ];

    public function apartado(){
        return $this->belongsTo('App\Apartado','apartado_id','id');
    }
}
