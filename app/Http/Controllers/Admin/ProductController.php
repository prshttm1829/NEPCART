<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productCategories = ProductCategory::all();
        return view('admin.product.create',compact('productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());
        Alert::success('Product added successfully');
        return back();
    }
    public function edit(Product $product)
    {
        $productCategories = ProductCategory::all();

        return view('admin.product.edit', compact('product','productCategories'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        Alert::success('Product updated successfully');
        return back();
    }

    public function destroy(Product $product)
    {
        $product->delete();
        Alert::success("Product deleted successfully");
        return back();
    }
}
