<?php

namespace App\Http\Requests\Admin\ProvedoresTbl;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreProvedoresTbl extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.provedores-tbl.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string'],
            'nombre_empresa' => ['required', 'string'],
            'email' => ['required', 'email', 'string'],
            'numer_telefono' => ['required', 'string'],
            'direccion' => ['required', 'string'],
            'ciudad' => ['required', 'string'],
            'pais' => ['required', 'string'],
            'provedor_desde' => ['nullable', 'date'],
            'enabled' => ['required', 'boolean'],
            
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
