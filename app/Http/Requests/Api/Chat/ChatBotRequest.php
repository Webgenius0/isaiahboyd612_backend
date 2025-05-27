<?php

namespace App\Http\Requests\Api\Chat;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ChatBotRequest extends FormRequest {
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
            'message'                        => 'required|string',
            'conversation_history'           => 'sometimes|array',
            'conversation_history.*.role'    => 'required|string|in:user,assistant,system',
            'conversation_history.*.content' => 'required|string',
        ];
    }
}
