<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class projectRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255|unique:projects,title,' . $this->id,
            'description' => 'nullable|string',
            'technology_id' => 'required|array',
            'technology_id.*' => 'exists:project_technologies,id', // Validate each item in the array
            'category_id' => 'required',
            'github_link' => 'nullable',
            'live_url' => 'nullable',
            'thumbnail' => 'nullable',
            'status' => 'required|integer|min:0|max:1',
        ];
    }
}
