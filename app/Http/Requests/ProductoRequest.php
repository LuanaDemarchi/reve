<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [

            'nombre' => [
                'required',
                'string',
                'max:100'
            ],

            'descripcion' => [
                'nullable',
                'string'
            ],

            'precio' => [
                'required',
                'numeric',
                'min:1'
            ],

            'stock' => [
                'required',
                'integer',
                'min:0'
            ],

            'categoria' => [
                'required',
                'in:roll,cookie,torta'
            ],

            'url_imagen' => [
                'nullable',
                'string'
            ],

        ];
    }


    public function messages(): array
    {
        return [

            'nombre.required' => 'El nombre del producto es obligatorio.',
            'nombre.max' => 'El nombre es demasiado largo.',

            'precio.required' => 'El precio es obligatorio.',
            'precio.numeric' => 'El precio debe ser un número.',
            'precio.min' => 'El precio debe ser mayor a 0.',

            'stock.required' => 'El stock es obligatorio.',
            'stock.integer' => 'El stock debe ser un número entero.',
            'stock.min' => 'El stock no puede ser negativo.',

            'categoria.required' => 'Debe seleccionar una categoría.',

        ];
    }

}