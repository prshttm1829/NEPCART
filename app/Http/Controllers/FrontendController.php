<?php

namespace App\Http\Controllers;

use App\Models\OfficeSetting;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPurchase;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $productPurchases = ProductPurchase::latest()->get();
        $products = Product::latest()->get();
        $productCategories = ProductCategory::limit('4')->get();
        return view('welcome', compact('productCategories', 'products', 'productPurchases'));
    }
    public function productDetail(Product $product)
    {
        $productCategories = ProductCategory::withCount('products')->get();
        return view('productDetail', compact('product', 'productCategories'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function category()
    {
        $categories = ProductCategory::all();
        return view('category', compact('categories'));
    }
    public function categoryProduct(ProductCategory $productCategory)
    {
        $products = $productCategory->products()->paginate(1); // paginate products

        return view('product', compact('products', 'productCategory'));
    }
    public function items()
    {
        $items = Product::all();
        return view('items', compact('items'));
    }
}
