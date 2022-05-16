<?php

namespace App\Http\Requests\Admin\ProductoBodegaTbl;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreProductoBodegaTbl extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.producto-bodega-tbl.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'producto_id' => ['required'],
            'bodega_id' => ['required', 'integer'],
            'ubicacion_codigo' => ['required', 'string'],
            'cantidad' => ['required', 'integer'],
            'nota' => ['nullable', 'string'],
            
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

    // public function getBodegaTblId(){
    //     if ($this->has('bodega')){
    //         return $this->get('bodega')['id'];s
    //     }

    //     return null;
    // }
    public function getProductoTblId(){
        if ($this->has('producto_id')){
            return $this->get('producto_id')['id'];
        }

        return null;
    }
}
