<?php

namespace App\Exports;

use App\Models\ProvedoresTbl;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProovedoresExport implements FromCollection ,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProvedoresTbl::all();
    }
    public function headings(): array
    {
        return [
            'No',
           'Nombre',
           'Razon Social',
           'Email',
            'Telefono',
           'Dirección',
           'Ciudad',
           'Pais',
           'Proveedor desde fecha',
           'Proveedor es activo',
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
            $export->nombre_empresa,
            $export->email,
            $export->numer_telefono,
            $export->direccion,
            $export->ciudad,
            $export->pais,
            $export->provedor_desde,
            $Status,
        ];
    }
}
