<?php

namespace App\Http\Requests\Admin\Gpschange;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateGpschange extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.gpschange.edit', $this->gpschange);
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
            'nombre' => ['sometimes', 'string'],
            'placa' => ['sometimes', 'string'],
            'lugar' => ['sometimes', 'string'],
            'idgpsanterior' => ['sometimes', 'string'],
            'seriegpsanterior' => ['sometimes', 'string'],
            'tipogpsanterior' => ['sometimes', 'string'],
            'idgpsnuevo' => ['sometimes', 'string'],
            'seriegpsnuevo' => ['sometimes', 'string'],
            'imeigpsnuevo' => ['sometimes', 'string'],
            'ipgpsnuevo' => ['sometimes', 'string'],
            'simgpsnuevo' => ['sometimes', 'string'],
            'telefonogpsnuevo' => ['sometimes', 'string'],
            'tipogpsnuevo' => ['sometimes', 'string'],
            'posicion' => ['nullable', 'boolean'],
            'panico' => ['nullable', 'boolean'],
            'cortemotor' => ['nullable', 'boolean'],
            'otros' => ['nullable', 'string'],
            'fecha' => ['sometimes', 'date'],
            'observacion' => ['nullable', 'string'],
            
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
