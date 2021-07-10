<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudyAbroadRequest extends FormRequest
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
        'country_name' => 'required|max:255|unique:study_abroads',
        'country_description' => 'required',
        'country_image' => 'required|image|mimes:png,jpg, jpeg',
        'education_system' => 'required',
        'education_system_image' => 'required|image|mimes:png,jpg, jpeg',
        'cost_of_studies' => 'required',
        'cost_of_studies_image' => 'required|image|mimes:png,jpg, jpeg',
        'living_and_working' => 'required',
        'visa_procedures' => 'required',
        'offered_courses' => 'required',
        'popular_universities' => 'required'
        ];
    }
}
