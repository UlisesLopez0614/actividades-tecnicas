<?php

namespace App\Http\Requests\Admin\Installation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateInstallation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.installation.edit', $this->installation);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'activated' => ['sometimes', 'boolean'],
            'tecnico' => ['sometimes', 'string'],
            'equipo' => ['sometimes', 'string'],
            'placa' => ['sometimes', 'string'],
            'idgps' => ['sometimes', 'string'],
            'serie' => ['sometimes', 'string'],
            'imei' => ['sometimes', 'string'],
            'sim' => ['sometimes', 'string'],
            'ip' => ['sometimes', 'string'],
            'telefono' => ['sometimes', 'string'],
            'lugar' => ['sometimes', 'string'],
            'posicion' => ['nullable', 'boolean'],
            'panico' => ['nullable', 'boolean'],
            'cortemotor' => ['nullable', 'boolean'],
            'otros' => ['nullable', 'string'],
            'fecha' => ['sometimes', 'date'],
            'observacion' => ['nullable', 'string'],
            'usuario' => ['sometimes', 'string'],
            
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
