<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductCategory extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'category_name',
        'brand_name',
        'description',
        'image',
        'no_of items',
        'slug',
        'status',
    ];

     protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value? Storage::disk('public')->url($value) : null,
            set:fn($value) => $value ? $value->store('ProductCategory','public') : null,


        );
    }
    
    public function products(): HasMany
    {
        return $this->hasMany(Product::class,'product_category_id');
    }


}
