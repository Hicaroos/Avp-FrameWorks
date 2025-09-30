<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $contact = $this->route('contact');

        return [
            'name' => 'required|string|max:225',
            'email' => ['required','string','max:225',Rule::unique('contacts')->ignore($contact)],
            'phone'=> ['required','string','max:11',Rule::unique('contacts')->ignore($contact)],
            'address'=> 'nullable|string|max:225'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'O nome é obrigatório.',
            'name.max' => 'O nome não pode ter mais de 225',
            'email.required' => 'O email é obrigatório.',
            'email.unique' => 'Este endereço de e-mail já foi cadastrado',
            'email.max' => 'O email não pode ter mais de 225',
            'phone.required' => 'O telefone é obrigatório.',
            'phone.max' => 'O telefone não pode ter mais de 11 digitos',
            'phone.unique' => 'Este telefone já foi cadastrado',
            'address.max' => 'O endereço não pode ter mais de 225',
        ];
    }
}

