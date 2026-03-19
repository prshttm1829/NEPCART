 @extends('admin.layouts.master')
 @section('container')
 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row gy-6">
         <div>
             <a href="{{route('admin.productCategory.index')}}" class="btn btn-danger">Back</a>
         </div>

         <!-- Data Tables -->
         <div class="col-12">
             <div class="card overflow-hidden">
                 <div class="table-responsive p-5">
                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                     <form action="{{route('admin.productCategory.store')}}" method="POST" enctype="multipart/form-data" class="row g-4">
                         @csrf
                         <div class="col-md-12 row">
                             <div class="mb-3 col-md-6">
                                 <label for="exampleInputname1" class="form-label">Category Name</label>
                                 <input type="text" name="category_name" value="{{old('category_name')}}" class="form-control" id="exampleInputcategory_name" aria-describedby="category_nameHelp">
                                 <span class="text-warning">
                                     @error('category_name')
                                     {{$message}}
                                     @enderror
                                 </span>

                             </div>
                             <div class="mb-3 col-md-6">
                                 <label for="exampleInputbrand_name" class="form-label">Brand Name</label>
                                 <input type="text" name="brand_name" value="{{old('brand_name')}}" class="form-control" id="exampleInputbrand_name" aria-describedby="brand_nameHelp">
                                 <span class="text-warning">
                                     @error('brand_name')
                                     {{$message}}
                                     @enderror
                                 </span>

                             </div>
                         </div>

                         <div class="mb-3">
                             <label for="exampleInputphone" class="form-label">Description	</label>
                             <input type="text" name="description" value="{{old('description')}}" class="form-control" id="exampleInputdescription" aria-describedby="descriptionHelp">
                             <span class="text-warning">
                                 @error('description')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>
                         <div class="mb-3">
                             <label for="exampleInputaddress" class="form-label">Image</label>
                             <input type="file" name="image" class="form-control" id="exampleInputimage" aria-describedby="imageHelp">
                             <span class="text-warning">
                                 @error('image')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>
                         <div class="mb-3">
                             <label for="exampleInputlogo" class="form-label">Slug</label>
                             <input type="text" name="slug" value="{{old('slug')}}" class="form-control" id="exampleInputslug" aria-describedby="slugHelp">
                             <span class="text-warning">
                                 @error('slug')
                                 {{$message}}
                                 @enderror
                             </span>
                        </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                    </div>

         </div>
         <!--/ Data Tables -->
     </div>
 </div>
 @endsection