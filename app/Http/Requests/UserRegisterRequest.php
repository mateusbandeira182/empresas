<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserRegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'cpf' => ['required', 'numeric', 'digits:11', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(8)
                ->letters()
                ->numbers()
                ->symbols()
                ->mixedCase()
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome do usuário é necessário',
            'name.string' => 'O nome deve ser composto por letras',
            'name.max' => 'O nome pode ter no máximo :max caracteres',
            'cpf.required' => 'Um número de CPF é necessário para continuar',
            'cpf.integer' => 'O CPF deve ser um número inteiro',
            'cpf.digits' => 'O CPF deve conter no 11 digitos',
            'email.required' => 'Um endereço de e-mail é necessário',
            'email.string' => 'O endereço de e-mail deve ser composto por letras e numeros',
            'email.email' => 'O endereço de e-mail deve ser um e-mail valido',
            'email.max' => 'O e-mail suporta no máximo :max caracteres',
            'email.unique' => 'O endereço de e-mail já está cadastrado em nossa base',
            'password.required' => 'Uma senha é necessária',
            'password.confirmed' => 'As senhas não conhecidem',
            'password.rules' => 'A senha deve conter no mínimo 8 (oito) caracteres, com pelo menos uma letra maiuscila, uma minúscula, um número e um simbolo',
        ];
    }
}
