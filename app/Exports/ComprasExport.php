<?php

namespace App\Exports;

use App\Models\ComprasTbl;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ComprasExport implements FromCollection ,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ComprasTbl::all();
    }
    public function headings(): array
    {
        return [
            'No',
           'Producto',
           'Proovedor',
           'Cantidad',
            'Descripcion',
           'Fecha de pedido',
           'Fecha de entregado',
           'Compra finalizada'
        ];
    }
    public function map($export): array
    {
        if ( $export->enabled == 1) {
           $Status = 'Entregado';
        } else{
            $Status = 'Por entregar';
        }
        return [
            $export->id,
            $export->nombre_producto,
            $export->nombre_proveedor,
            $export->cant,
            $export->descripcion,
            $export->fecha_pedido,
            $export->fecha_entregado,
            $Status,
        ];
    }
}
