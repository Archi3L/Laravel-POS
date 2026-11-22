<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
        'username' => [
            'required',
            'string',
            'max:255',
            Rule::unique('users', 'username')->ignore($this->route('user')),
        ],
        'full_name' => ['required', 'string', 'max:255'],
        'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
    ];
}
}