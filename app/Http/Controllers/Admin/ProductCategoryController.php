<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategory\StoreProductCategoryRequest;
use App\Http\Requests\ProductCategory\UpdateProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::latest()->get();
        return view('admin.productCategory.index', compact('productCategories'));
    }
    public function create()
    {
        return view('admin.productCategory.create');
    }
    public function store(StoreProductCategoryRequest $request)
    {
        ProductCategory::create($request->validated());
        Alert::success('ProductCategory added successfully');
        return back();
    }
    public function edit(ProductCategory $productCategory)
    {
        return view('admin.productCategory.edit', compact('productCategory'));
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $productCategory->update($request->validated());
        Alert::success('ProductCategory updated successfully');
        return back();
    }
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        Alert::success("ProductCategory deleted successfully");
        return back();
    }
}
