<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAssessmentRequest extends FormRequest
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
            'employee_id' => [
                'required',
                'integer',
                'exists:employees,id',
                Rule::unique('goal_assessments')->where(
                    'goal_id',
                    $this->input('goal_id')
                )
            ],
            'goal_id' => [
                'required',
                'integer',
                'exists:goals,id',
            ],
            'progress' => [
                'required',
                'integer',
                'between:0,100'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'employee_id.unique' => __('goal_assessment.errors.validation.data_unique'),
        ];
    }
}
