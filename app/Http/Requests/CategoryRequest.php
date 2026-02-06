<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Helper\ResponseHelper;

class CategoryRequest extends FormRequest
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
        $rules = [
            'name' => ['required', 'string', 'max:30'],
            'image' => ['nullable', 'string', 'max:255'],
            'parent_id' => ['nullable', 'integer', 'exists:categories,id'],
            'priority' => ['nullable', 'integer', 'min:0', 'max:9999999999'],
            'abc' => ['nullable'],
            'priority' => ['nullable', 'integer', 'min:0', 'max:9999999999'],
            'user_id' => ['nullable', 'integer', 'exists:users,id']
        ];

        // For update operations, make fields optional
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['name'] = ['sometimes', 'required', 'string', 'max:30'];
            $rules['parent_id'] = ['sometimes', 'nullable', 'integer', 'exists:categories,id'];
            $rules['priority'] = ['sometimes', 'nullable', 'integer', 'min:0', 'max:9999999999'];
        }
        return $rules;
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Category name is required',
            'name.max' => 'Category name cannot exceed 30 characters',
            'image.max' => 'Image path cannot exceed 255 characters',
            'parent_id.exists' => 'Selected parent category does not exist',
            'priority.max' => 'Priority value is too large',
            'user_id.exists' => 'Selected user does not exist'
        ];
    }
    /**
     * Get custom attributes for validator errors.
     */
    public function attributes(): array
    {
        return [
            'name' => 'category name',
            'image' => 'image path',
            'parent_id' => 'parent category',
            'priority' => 'priority',
            'user_id' => 'user'
        ];
    }

    /**
     * Handle a failed validation attempt.
     */
    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            ResponseHelper::error('Validation error', $validator->errors(), 422)
        );
    }
}
