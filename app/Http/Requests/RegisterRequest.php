<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'login' => 'required',
            'password' => 'required'
        ];
    }

    public function messages() {
        return [
            'login.required' => 'O campo login é obrigatório',
            'password.required' => 'O campo password é obrigatório'
        ];
    }
}
