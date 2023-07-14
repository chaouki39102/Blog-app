<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:100|',
            'email' => 'required|email|unique:users,email',
            'gender' => 'required|in:Male,Female',
            'job_title' => 'nullable|string|min:2|max:100',
            'password' => 'nullable|string',
            'bio' => ['required','confirmed', Password::min(8)->mixedCase()->letters()->numbers()->symbols()],
        ];
    }
}
