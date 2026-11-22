<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        'username' => ['required', 'string', 'max:255', 'unique:users,username'],
        'full_name' => ['required', 'string', 'max:255'],
    ];
}
}
