@extends('admin.layouts.master')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-6">
               

                <!-- Transactions -->
                <div class="col-lg-12">
                  <div class="card h-100">
                    <div class="card-body text-nowrap">
                      <h5 class="card-title mb-0 flex-wrap text-nowrap">Welcome {{Auth::user()->name}}!</h5>
                     
                      <a href="{{route('admin.productCategory.index')}}" class="btn btn-sm " style="background-color:#0F172A; color:white">View Products</a>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->

               
              </div>
               <!-- Congratulations card -->
                <div class="col-md-12 col-lg-4 mt-3">
                  <div class="card">
                    <div class="card-body text-nowrap">
                      <h5 class="card-title mb-0 flex-wrap text-nowrap">Product Category</h5>
                      <h4 class="text-primary mb-0">$42.8k🚀</h4>
                      <a href="javascript:;" class="btn btn-sm" style="background-color:#0F172A; color:white">View Sales</a>
                    </div>
                    <img
                      src="{{asset('assets/admin/img/iphone.avif')}}"
                      class="position-absolute bottom-0 end-0 me-5 mb-5"
                      width="90" height="100"
                      alt="view sales" />
                  </div>
                </div>
                <!--/ Congratulations card -->
            </div>
@endsection