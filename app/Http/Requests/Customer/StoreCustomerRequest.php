<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'unique:customers,email'],
            'password' => [
                'required',
                'string',
                'min:7',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
            ],
            'phone_number' => [
                'required',
                'digits:10',
                
                'regex:/^(98|97)[0-9]{8}$/',
                'unique:customers,phone_number'
            ],
            'location' => ['required', 'string'],
            'image' => ['required', 'image'],
            'gender' => ['required', 'string'],
            'dob' => ['required', 'date', 'before:today'],
        ];
    }
}
