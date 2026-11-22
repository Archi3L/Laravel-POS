<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
        'email' => ['required', 'email', 'max:255', 'unique:customers,email'],
        'phone' => ['nullable', 'string', 'max:20'],
    ];
}
}
