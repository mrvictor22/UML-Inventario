<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComprasTbl extends Model
{
    protected $table = 'compras_tbl';

    protected $fillable = [
        'nombre_producto',
        'producto_id',
        'nombre_proveedor',
        'proovedor_id',
        'descripcion',
        'fecha_pedido',
        'fecha_entregado',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'fecha_pedido',
        'fecha_entregado',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/compras-tbls/'.$this->getKey());
    }

    public function productos() {
        return $this->belongsTo(ProductoTbl::class);
    }
}
