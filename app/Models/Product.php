<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'product_category_id',
        'slug',
        'discount',
        'price',
        'no_of_items',
        'color',
        'status',
        'image',
    ];
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('Products', 'public') : null,
        );
    }
    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
    public function getNetAmountAttribute()
    {
        return $this->price - $this->discount;
    }
    public function getDiscountPercentAttribute()
    {
        if ($this->price > 0) {
            $discount = $this->price - $this->net_amount;
            return (int) round(($discount / $this->price) * 100);
        }
        return 0;
    }
    public function productPurchases(): HasMany
    {
        return $this->hasMany(ProductPurchase::class, 'product_id');
    }
}
