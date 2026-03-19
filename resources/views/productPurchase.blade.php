@extends('layout.master')
@section('container')

<body style="background-color:#f4f6f9;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-dark text-white text-center rounded-top-4">
                    <h4 class="mb-0">Confirm Your Order</h4>
                </div>

                <div class="card-body p-4">
@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


                    <form action="{{route('customer.productPurchase',$product->slug)}}" method="POST">
                        @csrf

                        <!-- Product ID -->
                        <div class="mb-3">
                            <label class="form-label">Product</label>
                            <input type="text" readonly value="{{$product->name}}" class="form-control" readonly>
                        </div>

                        <!-- Customer ID -->
                        <div class="mb-3">
                            <label class="form-label">Customer</label>
                            <input type="text" value="{{Auth::guard('customer')?->user()?->name}}" class="form-control" readonly>
                        </div>

                        <!-- Purchase Item -->
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" value="{{$product->price}}" name="price_item" class="form-control" min="1" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Discount</label>
                            <input type="number" value="{{$product->discount}}" name="discount_item" class="form-control" min="1" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" value="{{$purchase_item}}" name="purchase_item" class="form-control" min="1" readonly>
                        </div>

                        <!-- Address -->
                       

                        <!-- Delivery Charge -->
                        <div class="mb-3">
                            <label class="form-label">Delivery Charge</label>
                            <input type="number" value="{{$delivery_charge}}" name="delivery_charge" class="form-control" readonly>
                        </div>

                        <!-- Total Amount -->
                        <div class="mb-3">
                            <label class="form-label">Total Amount</label>
                            <input type="number" value="{{$product->net_amount * $purchase_item + $delivery_charge}}" name="total_amount" class="form-control" readonly>
                        </div>

                        

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success rounded-3">
                                Place Order
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>



@endsection