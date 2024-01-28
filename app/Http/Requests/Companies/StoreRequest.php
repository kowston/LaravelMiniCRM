<?php

namespace App\Http\Requests\Companies;

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
            'name' => [
                'string',
                'required'
            ],
            'company_num' => [
                'nullable',
                'string'
            ],
            'vat_num' => [
                'nullable',
                'string'
            ],
            'address_1' => [
                'nullable',
                'string',
            ],
            'address_2' => [
                'nullable',
                'string'
            ],
            'address_3' => [
                'nullable',
                'string'
            ],
            'city' => [
                'nullable',
                'string'
            ],
            'county' => [
                'nullable',
                'string'
            ],
            'contry' => [
                'nullable',
                'string'
            ],
            'phone' => [
                'nullable',
                'string'
            ],
            'email' => [
                'nullable',
                'string'
            ],
            'postcode' => [
                'nullable',
                'string'
            ],
            'rep_id' => [
                'nullable',
                'integer'
            ]
        ];
    }
}
