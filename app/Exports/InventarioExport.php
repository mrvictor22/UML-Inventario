<?php

namespace App\Exports;

use App\Models\ProductoBodegaTbl;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class InventarioExport implements FromCollection ,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProductoBodegaTbl::all();
    }
    public function headings(): array
    {
        return [
            'No',
           'Producto',
           'Bodega',
           'Codigo de ubicacion en bodega',
            'cantidad',
           'nota'
        ];
    }
    public function map($export): array
    {
        
        return [
            $export->id,
            $export->nombre,
            $export->bodega_nombre,
            $export->ubicacion_codigo,
            $export->cantidad,
            $export->nota
          
        ];
    }
}
