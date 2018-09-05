<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class OperacionesEpayco extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table = "operaciones_epayco";
   
    protected $fillable = ['id','operacion','operador','valor_operador','valor_payco','id_operacion_operador','id_cliente'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'valor_operador'
    ];
}

