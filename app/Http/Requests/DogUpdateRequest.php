<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DogUpdateRequest extends FormRequest
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
            'name' => ['nullable', 'string', 'max:255'],
            'health_level' => ['nullable', 'numeric', 'between:0,4'],
            'hunger_level' => ['nullable', 'numeric', 'between:0,4'],
            'image_url' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'price' => ['nullable', 'numeric', 'min:0'],
        ];
    }
}
