<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ProductPurchaseStatusMail;
use App\Models\ProductPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function order()
    {
        $productPurchases = ProductPurchase::latest()->get();
        return view('admin.order.index', compact('productPurchases'));
    }
    public function productStatus(ProductPurchase $productPurchase)
    {
        $product = $productPurchase->product;

        if ($productPurchase->status == 0) {
            // Decrease stock
            $product->no_of_items -= $productPurchase->purchase_item;
            $productPurchase->status = 1;
            Alert::success('Product decrease from stock successfully');
        } else {
            // Increase stock
            $product->no_of_items += $productPurchase->purchase_item;
            $productPurchase->status = 0;
            Alert::success('Product added in stock successfully');

        }
        Mail::to($productPurchase->customer->email)->send(new ProductPurchaseStatusMail($productPurchase));

        $product->save();
        $productPurchase->save();

        return back();
    }
}
