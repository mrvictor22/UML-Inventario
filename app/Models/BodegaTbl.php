<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodegaTbl extends Model
{
    protected $table = 'bodega_tbl';

    protected $fillable = [
        'nombre',
        'direccion',
        'tel',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/bodega-tbls/'.$this->getKey());
    }
}
