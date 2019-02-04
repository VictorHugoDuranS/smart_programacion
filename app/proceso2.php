<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proceso2 extends Model
{
    //en este modelo se guardaran los datos que estan en el historial despues de generado
    protected $fillable = [
        'programada', 'entrega', 'folio','nombre','unidades','proyecto',
        'material','estado','urgencia','horas','horasH','horasM'
    ];
}
