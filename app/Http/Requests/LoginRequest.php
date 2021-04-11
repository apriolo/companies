<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
