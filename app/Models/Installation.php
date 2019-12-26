<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    protected $fillable = [
        'tecnico',
        'equipo',
        'placa',
        'idgps',
        'serie',
        'imei',
        'sim',
        'ip',
        'telefono',
        'lugar',
        'posicion',
        'panico',
        'cortemotor',
        'otros',
        'fecha',
        'observacion',
        'usuario',
    
    ];
    
    
    protected $dates = [
        'fecha',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/installations/'.$this->getKey());
    }
}
