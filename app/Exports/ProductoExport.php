<?php

namespace App\Exports;

use App\Models\ProductoTbl;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductoExport implements FromCollection ,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProductoTbl::all();
    }
    public function headings(): array
    {
        return [
            'No',
           'Nombre',
           'Codigo de producto',
           'Marca',
           'Costo',
           'Precio',
           'Estatus',
        ];
    }
    public function map($export): array
    {
        if ( $export->enabled == 1) {
           $Status = 'Activo';
        } else{
            $Status = 'No Activo';
        }
        return [
            $export->id,
            $export->nombre,
            $export->prod_cod,
            $export->marca,
            $export->costo,
            $export->precio,
            $Status,
        ];
    }
}
