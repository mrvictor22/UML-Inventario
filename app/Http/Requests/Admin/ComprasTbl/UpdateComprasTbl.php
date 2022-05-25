<?php

namespace App\Http\Requests\Admin\ComprasTbl;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateComprasTbl extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.compras-tbl.edit', $this->comprasTbl);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nombre_producto' => ['nullable', 'string'],
            'producto_id' => ['nullable', 'integer'],
            'nombre_proveedor' => ['nullable', 'string'],
            'proovedor_id' => ['nullable', 'integer'],
            'descripcion' => ['nullable', 'string'],
            'fecha_pedido' => ['nullable', 'date'],
            'fecha_entregado' => ['nullable', 'date'],
            'enabled' => ['sometimes', 'boolean'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
