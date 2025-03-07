<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|min:3|max:128|email',
            'password' => 'required|min:6|max:64'
        ];
    }
    public function messages(): array
    {
        return [
            'email.email' => 'L\adresse e-mail est invalide.',
            'email.required' => 'L\adresse email est requise.',
            'email.min' => 'L _adresse doit contenir au minimum 3 caractères',
            'email.max' => 'L\adresse doit contenir au maximum 128 cararctères',
            'password.required' => 'Le mot de passe est requis',
            'password.min' => 'Le mot de passe doit contenir au minimum 6 caractères',
            'password.max' => 'Le mot de passe doit contenir au maximum.,'
        ];
    }
}
