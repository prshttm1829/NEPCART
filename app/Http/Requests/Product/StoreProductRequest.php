<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
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
            
            'name' => ['required','string'],
            'product_category_id' => ['required',Rule::exists('product_categories','id')->withoutTrashed()],
            'slug' => ['required','string'],
            'price' => ['required','string'],
            'discount' => ['required', 'string'],
            'no_of_items' => ['required', 'string'],
            'image' => ['required','image'],
            'color' => ['required','string'],


        ];
    }
}
