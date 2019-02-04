<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maquina1 extends Model
{
    protected $fillable = [
        'programada', 'entrega', 'folio','nombre','unidades','proyecto',
        'material','estado','urgencia','horas',
    ];
}
