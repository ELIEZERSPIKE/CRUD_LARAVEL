<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtpCodeRequest extends FormRequest
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
            'code' =>'required|min:4|max:6',
        ];
    }
    public function messages(): array{
        return[
            'email.email' => 'L|addresse e-mail est invalide',
            'email.required' =>'L|addresse e-mail est requise',
            'email.min' =>'L|addresse e-mail doit contenir 3 caracteres',
            'email.max' => 'L|addresse e-mail doit contenir 128 carateres',
            'code.required' =>'Le code de confirmation est requis',
            'code.min' => 'Le code doit contenir 4 caracteres',
            'code.max' => 'Le code doit contenir maximum 6 caracteres'
        ];
    }
}
