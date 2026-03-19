<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductPurchase extends Model
{
    protected $fillable=[
        'product_id',
        'delivery_charge',
        'customer_id',
        'status',
        'purchase_item',
        'total_amount',
        

        
        ];
        public function product(): BelongsTo
        {
            return $this->belongsTo(Product::class, 'product_id');
        }
        
        public function customer(): BelongsTo
        {
            return $this->belongsTo(Customer::class, 'customer_id');
        }
        
}
