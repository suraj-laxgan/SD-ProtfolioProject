<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class WsprofileCreateRequest extends FormRequest
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
            // Core Profile Info
            'name'                => 'required|string|max:255',
            'title'               => 'nullable|string|max:255',
            'sub_title'           => 'nullable|string|max:255',
            'email'               => 'required|email|unique:profiles,email,'. $this->id, // Replace with your actual table name
            'phone'               => 'nullable|string|max:20',
            'location'            => 'nullable|string|max:255',
            'profile_image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validation for file upload
            'age'                 => 'nullable|integer|min:1|max:120',
            'state'               => 'nullable|string|max:255',
            'country'             => 'nullable|string|max:255',
            'zipCode'             => 'nullable|string|max:20',
            
            // Stats (Numeric)
            'total_experience'    => 'nullable|integer|min:0',
            'project_completed'   => 'nullable|integer|min:0',
            'happy_client'        => 'nullable|integer|min:0',

            // About Section
            'about_header'        => 'nullable|string',
            'about_title'         => 'nullable|string|max:255',
            'about_subtitle'      => 'nullable|string|max:255',
            'about_description'   => 'nullable|string',
            'about_image'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

            // Headers & Contact
            'resume_header'       => 'nullable|string',
            'exp_header'          => 'nullable|string',
            'edu_header'          => 'nullable|string',
            'protfolio_header'    => 'nullable|string',
            'service_header'      => 'nullable|string',
            'service_title'       => 'nullable|string|max:255',
            'service_sub_title'   => 'nullable|string|max:255',
            'contact_title'       => 'nullable|string|max:255',
            'contact_sub_title'   => 'nullable|string|max:255',
            'contact_address'     => 'nullable|string|max:500',

            // Social & Links
            'github_url'          => 'nullable|url',
            'linkedin_url'        => 'nullable|url',
            'upwork_url'          => 'nullable|url',
        ];
    }
}
