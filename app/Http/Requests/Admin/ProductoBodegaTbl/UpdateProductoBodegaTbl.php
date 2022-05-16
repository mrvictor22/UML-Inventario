<?php

namespace App\Http\Requests\Admin\ProductoBodegaTbl;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateProductoBodegaTbl extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.producto-bodega-tbl.edit', $this->productoBodegaTbl);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'producto_id' => ['nullable', 'integer'],
            'bodega_id' => ['sometimes', 'integer'],
            'ubicacion_codigo' => ['sometimes', 'string'],
            'cantidad' => ['sometimes', 'integer'],
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
}
