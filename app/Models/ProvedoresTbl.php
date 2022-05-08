<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvedoresTbl extends Model
{
    protected $table = 'provedores_tbl';

    protected $fillable = [
        'nombre',
        'nombre_empresa',
        'email',
        'numer_telefono',
        'direccion',
        'ciudad',
        'pais',
        'provedor_desde',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'provedor_desde',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/provedores-tbls/'.$this->getKey());
    }
}
