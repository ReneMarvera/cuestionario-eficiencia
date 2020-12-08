<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'empresas';

    protected $fillable = [
        'nombre'
    ];

    public function empresaRespuestas(){
        return $this->hasMany('App\EmpresaRespuesta','empresa_id','id');
    }
}
