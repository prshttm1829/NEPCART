@extends('admin.layouts.master')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row gy-6">
        <div>
            <a href="{{route('admin.officeSetting.create')}}" class="btn" style="background-color:#0F172A; color:white">Add</a>
        </div>

        <!-- Data Tables -->
        <div class="col-12">
            <div class="card overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th class="text-truncate">Image</th>
                                <th class="text-truncate">Name</th>
                                <th class="text-truncate">Email</th>
                                <th class="text-truncate">Phone Number</th>
                                <th class="text-truncate">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($officeSettings as $officeSetting)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{$officeSetting->logo}}" alt="Avatar" class="rounded-circle')}}" />
                                        </div>

                                    </div>
                                </td>
                                <td class="text-truncate">{{$officeSetting->name}}</td>
                                <td class="text-truncate">
                                    {{$officeSetting->email}}
                                </td>
                                <td class="text-truncate">
                                    {{$officeSetting->phone}}
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <a href="{{route('admin.officeSetting.edit',$officeSetting)}}" class="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M9.243 18.997H21v2H3v-4.243l9.9-9.9l4.242 4.243zm5.07-13.557l2.122-2.121a1 1 0 0 1 1.414 0l2.829 2.828a1 1 0 0 1 0 1.415l-2.122 2.121z" />
                                            </svg>
                                        </a>
                                        <form action="{{route('admin.officeSetting.destroy',$officeSetting)}}"  method="Post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="dropdown-item" onclick="return confirm('Are You sure want to delete')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4zM6 6v14h12V6zm3 3h2v8H9zm4 0h2v8h-2z" />
                                                </svg>
                                            </button>

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