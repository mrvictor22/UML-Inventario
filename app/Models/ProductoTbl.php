<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoTbl extends Model
{
    protected $table = 'producto_tbl';

    protected $fillable = [
        'nombre',
        'prod_cod',
        'marca',
        'costo',
        'precio',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function productoInventario()
{
    return $this->hasMany(ProductoBodegaTbl::class);
}
    public function productoCompras()
{
    return $this->hasMany(ComprasTbl::class);
}


    
    public function getResourceUrlAttribute()
    {
        return url('/admin/producto-tbls/'.$this->getKey());
    }
}
