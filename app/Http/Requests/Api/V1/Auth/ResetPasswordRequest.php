<?php

namespace App\Http\Requests\Api\V1\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'token'                 => ['required', 'string'],
            'password'              => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
    }
}
