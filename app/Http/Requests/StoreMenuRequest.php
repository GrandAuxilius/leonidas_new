<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreMenuRequest extends FormRequest


{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Change this to true if you want to authorize the request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'menuName' => 'required|string',
            'menuCategory' => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'menuStatus' => 'required|string',
            'image' => 'required|image',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'image.required' => 'The menu image is required.',
            'image.image' => 'The menu image must be an image file.',
            'image.mimes' => 'The menu image must be of type: jpeg, png, jpg.',
        ];
    }
}
