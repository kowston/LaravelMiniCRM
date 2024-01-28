<?php

namespace App\Http\Requests\UserProfiles;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => [
                'string'
            ],
            'first_name' => [
                'string',
                'required'
            ],
            'last_name' => [
                'string',
                'required'
            ],
            'email' => [
                'string'
            ],
            'phone' => [
                'string'
            ],
            'position' => [
                'string'
            ],
            'department' => [
                'string'
            ],
            'role' => [
                'string'
            ]
        ];
    }
}
