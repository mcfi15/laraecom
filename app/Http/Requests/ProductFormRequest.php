<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'category_id' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'small_description' => ['required', 'string', 'max:500'],
            'description' => ['nullable', 'string'],
            'original_price' => ['required', 'integer'],
            'brand' => ['nullable', 'string'],
            'quantity' => ['required', 'string'],
            'selling_price' => ['required', 'integer'],
            'trending' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
            'slug' => ['required', 'string'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'meta_keyword' => ['nullable', 'string'],
            'image' => ['nullable','mimes:jpg,png,jpeg,PNG,JPG,JPEG'],
            'images' => ['nullable', 'array']
        ];
    }
}
