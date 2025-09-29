<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'name' => 'required|string|max:225',
            'email' => 'required|string|max:225',
            'phone'=> ' required|int|max:11',
            'address'=> 'nullable|string|max:225',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'O nome é obrigatório.',
            'name.max' => 'O nome não pode ter mais de 225',
            'email.required' => 'O email é obrigatório.',
            'email.max' => 'O email não pode ter mais de 225',
            'phone.required' => 'O telefone é obrigatório.',
            'phone.max' => 'O telefone não pode ter mais de 11',
            'address.max' => 'O endereço não pode ter mais de 225',
        ];
    }
}

