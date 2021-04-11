<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanies extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|min:4',
            'telephone' => 'required|min:8',
            'address' => 'required|min:8',
            'postalcode' => 'required|min:8',
            'city' => 'required|min:4',
            'country' => 'required|min:4',
            'descript' => 'required|min:4',
            'categoriesForm' => 'required'
        ];
    }

    public function messages() {
        return [
            'title.required' => 'O campo Título é obrigatório',
            'telephone.required' => 'O campo Telefone é obrigatório',
            'address.required' => 'O campo Endereço é obrigatório',
            'postalcode.required' => 'O campo CEP é obrigatório',
            'city.required' => 'O campo Cidade é obrigatório',
            'country.required' => 'O campo Estado é obrigatório',
            'descript.required' => 'O campo Descrição é obrigatório',
            'categoriesForm.required' => 'A empresa precisa ter uma categoria'
        ];
    }
}
