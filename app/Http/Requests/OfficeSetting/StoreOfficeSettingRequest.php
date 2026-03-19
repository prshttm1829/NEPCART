<?php

namespace App\Http\Requests\OfficeSetting;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfficeSettingRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'logo' => ['required', 'image'],
            'favicon_logo' => ['required', 'image'],
            'website_url' => ['required', 'url'],
            'instagram_url' => ['required', 'url'],
            'tiktok_url' => ['required', 'url'],
            'facebook_url' => ['required', 'url'],


        ];
    }
}
