<?php

namespace App\Http\Requests\Admin\ComprasTbl;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreComprasTbl extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.compras-tbl.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nombre_producto' => ['nullable'],
            'producto_id' => ['nullable'],
            'nombre_proveedor' => ['nullable'],
            'proovedor_id' => ['nullable'],
            'descripcion' => ['nullable', 'string'],
            'cant' => ['nullable'],
            'fecha_pedido' => ['nullable', 'date'],
            'fecha_entregado' => ['nullable', 'date'],
            'enabled' => ['required'],
            
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
    public function getProductoTblId(){
        if ($this->has('producto_id')){
            return $this->get('producto_id')['id'];
        }

        return null;
    }

    public function getProvedoresTblId(){
        if ($this->has('proovedor_id')){
            return $this->get('proovedor_id')['id'];
        }

        return null;
    }
}
