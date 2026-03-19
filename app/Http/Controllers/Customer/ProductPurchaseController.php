<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPurchaseRequest;
use App\Mail\ProductPurchaseStatusMail;
use App\Models\DeliveryCharge;
use App\Models\Product;
use App\Models\ProductPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ProductPurchaseController extends Controller
{
    public function productPurchasePage(Request $request, Product $product)
    {
        if (!Auth::guard('customer')->check()) {
            return redirect()->route('customerLogin');
        }

        $customer = Auth::guard('customer')->user();
        $purchase_item = $request->purchase_item;
        if ($purchase_item > $product->no_of_items) {
            Alert::success('No of item is not in stock');
            return back();
        }
        $deliveryRecord = DeliveryCharge::where(function ($query) use ($customer) {
            $query->where('address', 'LIKE', '%' . $customer->address . '%')
                ->orWhere('address', 'LIKE', '%' . $customer->location . '%');
        })->first();

        $delivery_charge = $deliveryRecord ? $deliveryRecord->charge : 0;
        return view('productPurchase', compact('product', 'purchase_item', 'customer', 'delivery_charge'));
    }

    public function productPurchase(ProductPurchaseRequest $request, Product $product)
    {
        $customer = Auth::guard('customer')->user();

        $productPurchase = ProductPurchase::create(
            $request->validated() + [
                'product_id' => $product->id,
                'customer_id' => $customer->id,
            ]
        );


        Alert::success('Product purchased successfully');
        return back();
    }
}
