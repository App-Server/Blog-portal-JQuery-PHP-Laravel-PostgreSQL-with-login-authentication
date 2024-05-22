<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255|min:3',
            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'password' => [
                'required',
                'min:6',
                'max:15',
            ]
        ];

        // Verifica se o método HTTP é PUT
        if ($this->method() === 'PUT') {
            // Atualiza as regras para permitir que a senha seja nula
            $rules['password'] = [
                'nullable',
                'min:6',
                'max:15',
            ];
            // Mantém as regras de unicidade do e-mail quando o método é PUT
            unset($rules['email']); // Remove a regra de unicidade do e-mail definida anteriormente
            $rules['email'][] = 'nullable';
        }

        return $rules;
    }
}
