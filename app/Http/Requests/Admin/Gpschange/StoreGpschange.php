<?php

namespace App\Http\Requests\Admin\Gpschange;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreGpschange extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.gpschange.create');
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
            'idgpsanterior' => ['required', 'string'],
            'seriegpsanterior' => ['required', 'string'],
            'tipogpsanterior' => ['required', 'string'],
            'idgpsnuevo' => ['required', 'string'],
            'seriegpsnuevo' => ['required', 'string'],
            'imeigpsnuevo' => ['required', 'string'],
            'ipgpsnuevo' => ['required', 'string'],
            'simgpsnuevo' => ['required', 'string'],
            'telefonogpsnuevo' => ['required', 'string'],
            'tipogpsnuevo' => ['required', 'string'],
            'posicion' => ['nullable', 'boolean'],
            'panico' => ['nullable', 'boolean'],
            'cortemotor' => ['nullable', 'boolean'],
            'otros' => ['nullable', 'string'],
            'fecha' => ['required', 'date'],
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
