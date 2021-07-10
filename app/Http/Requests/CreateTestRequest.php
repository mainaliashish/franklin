<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTestRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'test_name' => 'required|unique:test_preparations',
            'test_image' => 'required|image|mimes:jpeg, jpg',
            'test_description' => 'required',
            'test_modules' => 'required',
            'test_module_image' => 'required|image|mimes:jpeg, jpg',
            'test_results' => 'required'
        ];
    }
}
