@extends('admin.layouts.master')
@section('container')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row gy-6">
    <div>
      <a href="{{ route('admin.deliveryCharge.index')}}" type="button" class="btn btn-primary">Back</a>
    </div>
        <!-- Data Tables -->
        <div class="col-12">
            <div class="card overflow-hidden">
                <div class="table-responsive">
                    <div>
                        <div class="card-body ">
                            <form action="{{ route('admin.deliveryCharge.store') }}" method="post" enctype="multipart/form-data" class="row g-4">
                                @csrf
                                <!-- Name -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Charge</label>
                                    <input type="number" name="charge" class="form-control form-control-lg shadow-sm" placeholder="Delivery charge" >
                                    <span class="text-warning">
                                        @error('charge')
                                        {{ $message }}
                                        @enderror

                                    </span>
                                </div>

                                 <!-- address -->
                                 <div class="col-md-6">
                                    <label class="form-label fw-semibold">Address</label>
                                    <input type="text" name="address" class="form-control form-control-lg shadow-sm" placeholder="Enter Address" >
                                    <span class="text-warning">
                                        @error('address')
                                        {{ $message }}
                                        @enderror

                                    </span>
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary btn-lg px-5 rounded-3 shadow-sm">
                                        Submit
                                    </button>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Data Tables -->
    </div>
</div>
<!-- / Content -->
@endsection