<?php

namespace App\Http\Requests\Admin\Uninstallation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreUninstallation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.uninstallation.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'activated' => ['required', 'boolean'],
            'tecnico' => ['required', 'string'],
            'nombre' => ['required', 'string'],
            'placa' => ['required', 'string'],
            'lugar' => ['required', 'string'],
            'fecha' => ['required', 'date'],
            'observacion' => ['nullable', 'string'],
            'usuario' => ['required', 'string'],
            
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
