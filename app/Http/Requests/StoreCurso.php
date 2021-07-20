<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

//realizar validaciones a los campos:
    public function rules()
    {
        return [

            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'

        ];
    }
//nombre personalizado de variable para validaciones
    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
        ];
    }
//mensaje personalizados para validaciones
    public function messages()
    {
        return [
            'descripcion.required' => 'Debe realizar una descripcion del curso',
        ];
    }
}
