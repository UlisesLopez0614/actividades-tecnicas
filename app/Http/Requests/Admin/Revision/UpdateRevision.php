<?php

namespace App\Http\Requests\Admin\Revision;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateRevision extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.revision.edit', $this->revision);
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
