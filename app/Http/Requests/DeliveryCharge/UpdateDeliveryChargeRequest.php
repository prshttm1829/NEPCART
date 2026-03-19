<?php

namespace App\Http\Requests\DeliveryCharge;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeliveryChargeRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'charge' => ['required', 'string'],
            'address' => ['required', 'string'],
        ];
    }
}
