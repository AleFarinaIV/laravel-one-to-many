<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' =>'required|string|max:35',
            'description' =>'nullable|string|max:255',
            'start_date' =>'required|date',
            'end_date' =>'required|date',
            'stack' =>'required|string',
            'status' => 'sometimes|boolean',
            'type_id' => 'nullable|exists:types,id',
            'image_path' => 'nullable|image',
        ];
    }
}
