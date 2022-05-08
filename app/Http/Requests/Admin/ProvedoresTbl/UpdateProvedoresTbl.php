<?php

namespace App\Http\Requests\Admin\ProvedoresTbl;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateProvedoresTbl extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.provedores-tbl.edit', $this->provedoresTbl);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nombre' => ['sometimes', 'string'],
            'nombre_empresa' => ['sometimes', 'string'],
            'email' => ['sometimes', 'email', 'string'],
            'numer_telefono' => ['sometimes', 'string'],
            'direccion' => ['sometimes', 'string'],
            'ciudad' => ['sometimes', 'string'],
            'pais' => ['sometimes', 'string'],
            'provedor_desde' => ['nullable', 'date'],
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
