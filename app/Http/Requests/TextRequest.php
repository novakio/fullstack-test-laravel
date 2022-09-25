<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TextRequest extends FormRequest
{
    public function rules()
    {
        return [
            'text' => ['required']
        ];
    }
    
    public function messages()
    {
        return [
            'text.required' => 'É preciso enviar um texto!',
        ];
    }
}
