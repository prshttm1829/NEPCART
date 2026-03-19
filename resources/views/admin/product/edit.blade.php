 @extends('admin.layouts.master')
 @section('container')
 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row gy-6">
         <div>
             <a href="{{route('admin.product.index')}}" class="btn btn-danger">Back</a>
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

                     <form action="{{route('admin.product.update',$product)}}" method="POST" enctype="multipart/form-data" class="row g-4">
                         @csrf
                         @method('PUT')
                         <div class="col-md-12 row">
                             <div class="mb-3 col-md-6">
                                 <label for="exampleInputname1" class="form-label">Category Name</label>
                                 <select class="form-control" name="product_category_id">
                                     <option value="">Select Category</option>
                                     @foreach($productCategories as $productCategory)
                                     <option value="{{$productCategory->id}}">{{$productCategory->category_name}}</option>
                                     @endforeach
                                 </select>

                                 <span class="text-warning">
                                     @error('product_category_id')
                                     {{$message}}
                                     @enderror
                                 </span>

                             </div>
                             <div class="mb-3 col-md-6">
                                 <label for="exampleInputbrand_name" class="form-label">Product Name</label>
                                 <input type="text" name="name" value="{{old('name',$product->name)}}" class="form-control" id="exampleInputbrand_name" aria-describedby="brand_nameHelp">
                                 <span class="text-warning">
                                     @error('name')
                                     {{$message}}
                                     @enderror
                                 </span>

                             </div>
                         </div>



                         <div class="mb-3">
                             <label for="exampleInputlogo" class="form-label">Slug</label>
                             <input type="text" name="slug" value="{{old('slug',$product->slug)}}" class="form-control" id="exampleInputslug" aria-describedby="slugHelp">
                             <span class="text-warning">
                                 @error('slug')
                                 {{$message}}
                                 @enderror
                             </span>
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputlogo" class="form-label">Image</label>
                             <input type="file" name="image" class="form-control" id="exampleInputimage" aria-describedby="imageHelp">
                             <span class="text-warning">
                                 @error('image')
                                 {{$message}}
                                 @enderror
                             </span>
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputlogo" class="form-label">price</label>
                             <input type="text" name="price" class="form-control" value="{{old('price',$product->price)}}" id="exampleInputprice" aria-describedby="priceHelp">
                             <span class="text-warning">
                                 @error('price')
                                 {{$message}}
                                 @enderror
                             </span>
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputlogo" class="form-label">discount</label>
                             <input type="text" name="discount" value="{{old('discount',$product->discount)}}" class="form-control" id="exampleInputdiscount" aria-describedby="discountHelp">
                             <span class="text-warning">
                                 @error('discount')
                                 {{$message}}
                                 @enderror
                             </span>
                             <div class="mb-3">
                             <label for="exampleInputlogo" class="form-label">No of Items</label>
                             <input type="text" name="no_of_items" value="{{old('no_of_items',$product->no_of_items)}}" class="form-control" id="exampleInputno_of_items" aria-describedby="no_of_itemsHelp">
                             <span class="text-warning">
                                 @error('no_of_items')
                                 {{$message}}
                                 @enderror
                             </span>
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputlogo" class="form-label">color</label>
                             <input type="text" name="color" class="form-control" value="{{old('color',$product->color)}}" id="exampleInputcolor" aria-describedby="colorHelp">
                             <span class="text-warning">
                                 @error('color')
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