<?php

namespace App\Http\Requests\Admin\Gpschange;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexGpschange extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.gpschange.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderBy' => 'in:id,activated,tecnico,nombre,placa,lugar,idgpsanterior,seriegpsanterior,tipogpsanterior,idgpsnuevo,seriegpsnuevo,imeigpsnuevo,ipgpsnuevo,simgpsnuevo,telefonogpsnuevo,tipogpsnuevo,posicion,panico,cortemotor,otros,fecha|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}
