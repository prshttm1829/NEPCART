@extends('admin.layouts.master')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row gy-6">


        <!-- Data Tables -->
        <div class="col-12">
            <div class="card overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th class="text-truncate">Prdouct Name</th>
                                <th class="text-truncate">Customer Name</th>
                                <th class="text-truncate">Delivery Charge</th>
                                <th class="text-truncate">Total Amount</th>
                                <th class="text-truncate">Purchase Item</th>
                                <th class="text-truncate">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($productPurchases as $productPurchase)
                            <tr>

                                <td class="text-truncate">{{$productPurchase->product->name}}</td>
                                <td class="text-truncate">
                                    {{$productPurchase->customer->name}}
                                </td>
                                <td class="text-truncate">
                                    {{$productPurchase->delivery_charge}}
                                </td>
                                <td class="text-truncate">
                                    {{$productPurchase->total_amount}}
                                </td>
                                <td class="text-truncate">
                                    {{$productPurchase->purchase_item}}
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <form action="{{route('admin.productPurchase.productStatus',$productPurchase)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input class="form-check-input toggle-setting"
                                                type="checkbox"
                                                onchange="this.form.submit()"
                                                {{ $productPurchase->status ? 'checked' : '' }}>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>No data found!!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Data Tables -->
    </div>
</div>
@endsection