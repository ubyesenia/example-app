<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
     //Nota: originalmente está en false pero para esta prueba es necesario activarla a true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'Required|min:3', 
            'description' => 'Required', 
            'category' => 'Required'];
    }

    public function messages()
    {
        return ['name.required'=>'El nombre es obligatorio',
                'desription.required'=>'La descripción es obligatoria',
                'category.required'=>'La categoría es obligatoria'];
    }

    public function attributes()
    {
        return['name'=>'nombre del curso'];
    }
        
    
}
