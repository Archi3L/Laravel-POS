<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
 public function authorize(): bool
{
    return true;
}

public function rules(): array
{
    return [
        'full_name' => ['required', 'string', 'max:255'],
        'email' => [
            'required',
            'email',
            'max:255',
            Rule::unique('customers', 'email')->ignore($this->route('customer')),
        ],
        'phone' => ['nullable', 'string', 'max:20'],
    ];
}
}
