<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ['required', 'max:100'],
        ];
    }

    public function messages() {
        return [
            "name.required" => "The type's name field is required.",
            "name.max" => "The type's name field should not exceed 100 characters.",
        ];
    }
}
