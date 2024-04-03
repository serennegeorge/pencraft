<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostWriting extends FormRequest
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
            'description' => 'required|string|min:45|max:255',
            'read_time' => 'required|integer|min:3|max:30',
            'read_unit' => 'required|string|min:3|max:30',

            //
        ];
    }
}
