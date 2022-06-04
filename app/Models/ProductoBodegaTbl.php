<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoBodegaTbl extends Model
{
    protected $table = 'producto_bodega_tbl';

    protected $fillable = [
        'producto_id',
        'bodega_id',
        'bodega_nombre',
        'ubicacion_codigo',
        'cantidad',
        'nota',
        'date_devolucion',
        'cantidad_devolucion',
        'nota_devolucion',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/producto-bodega-tbls/'.$this->getKey());
    }

    public function bodega() {
        return $this->belongsTo(BodegaTbl::class);
    }
    public function productos() {
        return $this->belongsTo(ProductoTbl::class);
    }
}
