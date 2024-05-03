<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWritingRequest extends FormRequest
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
            'type' => 'required|string|min:2|max:255',
            'title' => 'required|string|min:2|max:255',
            'description' => 'required|string|min:2|max:3000',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg,gif,webp|max:20480',
            'read_time' => 'required|integer|max:10',
            'read_unit' => 'required|string|min:2|max:255',
        ];
    }
}