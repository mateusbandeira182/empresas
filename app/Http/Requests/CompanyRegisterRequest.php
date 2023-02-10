<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRegisterRequest extends FormRequest
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
            'alias' => ['required', 'string', 'max:100'],
            'cnpj' => ['required', 'numeric', 'digits:14', 'unique:companies'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:companies'],
            'phone' => ['required', 'numeric', 'digits:11', 'unique:companies'],
            'owner' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Uma razão social é necessária',
            'name.max' => 'A razão social suporta no máximo 100 (cem) caracteres',
            'alias.required' => 'O nome fantasia é necessário',
            'alias.max' => 'O nome fantasia suporta no máximo 100 (cem) caracteres',
            'cnpj.required' => 'Um CNPJ é necessário para empresa',
            'cnpj.numeric' => 'O CNPJ é numérico',
            'cnpj.digits' => 'O CNPJ contem 14 digitos',
            'cnpj.unique' => 'Esse CNPJ já está cadastrado',
            'email.required' => 'Um endereço de e-mail é necessário',
            'email.max' => 'O e-mail deve conter no máximo :max caracteres',
            'email.unique' => 'O e-mail já esta cadastrado em nossa base',
            'phone.required' => 'Um número de telefone é necessário',
            'phone.digits' => 'Um telefone contem 11 caracteres',
            'phone.unique' => 'O número de telefone já está cadastrado em nossa base',
            'owner.required' => 'É necessário selecionar um usuário',
        ];
    }
}
