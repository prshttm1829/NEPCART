<?php

namespace App\Http\Requests\OfficeSetting;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOficeSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'logo' => ['nullable', 'image'],
            'favicon_logo' => ['nullable', 'image'],
            'website_url' => ['required', 'url'],
            'instagram_url' => ['required', 'url'],
            'tiktok_url' => ['required', 'url'],
            'facebook_url' => ['required', 'url'],


        ];
    }
}
