<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true; 
    }

    // Reglas de validación para tus inputs del formulario
    public function rules(): array
    {
        return [
            'nombre'   => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'motivo'   => 'required|string|max:200',
            'consulta' => 'required|string|min:10|max:1000',
        ];
    }

    
    public function messages(): array
    {
        return [
            'nombre.required'   => 'El nombre es obligatorio.',
            'email.required'    => 'El email es obligatorio.',
            'email.email'       => 'Formato de email inválido.',
            'consulta.min'      => 'La consulta debe tener al menos 10 caracteres.',
        ];
    }
    public function store_contact(ContactoRequest $request)
     {

    

      // Si la validación falla, Laravel vuelve atrás automáticamente con los errores.
     // Si pasa, acá obtenés los datos ya limpios y validados:
     $datos = $request->validated();

     $nombre   = $datos['nombre'];
     $email    = $datos['email'];
     $motivo   = $datos['motivo'];
     $consulta = $datos['consulta'];

     // Aquí iría tu código para guardar en la Base de Datos (BD)

     // Redirecciona al formulario con un mensaje de éxito
     return redirect()->back()->with('success_message', 'Tu consulta ha sido enviada correctamente.');
 
     }

 }