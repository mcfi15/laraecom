<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderFormRequest extends FormRequest
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
            'title' => ['required', 'max:255', 'string'],
            'description' => ['nullable', 'max:800', 'string'],
            'status' => ['nullable', 'string'],
            'url' => ['nullable', 'string'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg,PNG,JPG,JPEG'],
        ];
    }
}
