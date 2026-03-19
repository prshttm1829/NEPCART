@extends('admin.layouts.master')
@section('container')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row gy-6">
    <!-- Congratulations card -->
    <div class="col-md-12">
      <div class="card ">
        <h1 class="px-5 text-center">Delivery Charge Table</h1>
      </div>
    </div>
    <!--/ Congratulations card -->
    <div>
      <a href="{{ route('admin.deliveryCharge.create')}}" type="button" class="btn btn-primary">Add</a>
    </div>
    <!-- Data Tables -->
    <div class="col-12">
      <div class="card overflow-hidden">
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th class="text-truncate">S.No</th>
                <th class="text-truncate">Address</th>
                <th class="text-truncate">Charge</th>
                <th class="text-truncate">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($deliveryCharges as $key => $deliveryCharge)
              <tr>
                <td class="text-truncate">{{ $loop->iteration }}</td>
               

                <td class="text-truncate">
                  {{ $deliveryCharge->address }}
                </td>
                <td class="text-truncate">
                  {{ $deliveryCharge->charge }}
                </td>
              
                <td class="text-truncate">
                  <div class="d-flex align-items-center gap-3">
                    <a href="{{ route('admin.deliveryCharge.edit',$deliveryCharge) }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m12.9 6.855l4.242 4.242l-9.9 9.9H3v-4.243zm1.414-1.415l2.121-2.121a1 1 0 0 1 1.414 0l2.829 2.828a1 1 0 0 1 0 1.415l-2.122 2.121z" />
                      </svg>
                    </a>
                    <form action="{{ route('admin.deliveryCharge.destroy',$deliveryCharge) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure want to delete')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M7 6V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6zm6.414 8l1.768-1.768l-1.414-1.414L12 12.586l-1.768-1.768l-1.414 1.414L10.586 14l-1.768 1.768l1.414 1.414L12 15.414l1.768 1.768l1.414-1.414zM9 4v2h6V4z" />
                        </svg>

                      </button>
                    </form>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!--/ Data Tables -->
  </div>
</div>
<!-- / Content -->
@endsection