 @extends('admin.layouts.master')
 @section('container')
 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row gy-6">
         <div>
             <a href="{{route('admin.officeSetting.index')}}" class="btn btn-danger">Back</a>
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
                     <form action="{{route('admin.officeSetting.update',$officeSetting)}}" method="Post" enctype="multipart/form-data" class="row g-4">
                         @method('PUT')
                         @csrf
                         <div class="col-md-12 row">
                             <div class="mb-3 col-md-6">
                                 <label for="exampleInputname1" class="form-label">Name</label>
                                 <input type="text" name="name" value="{{old('name',$officeSetting->name) }}" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
                                 <span class="text-warning">
                                     @error('name')
                                     {{$message}}
                                     @enderror
                                 </span>

                             </div>
                             <div class="mb-3 col-md-6">
                                 <label for="exampleInputemail" class="form-label">Email</label>
                                 <input type="text" name="email" value="{{old('email',$officeSetting->email) }}" class="form-control" id="exampleInputemail" aria-describedby="emailHelp">
                                 <span class="text-warning">
                                     @error('email')
                                     {{$message}}
                                     @enderror
                                 </span>

                             </div>
                         </div>

                         <div class="mb-3">
                             <label for="exampleInputphone" class="form-label">Phone</label>
                             <input type="text" name="phone" value="{{old('phone',$officeSetting->phone) }}" class="form-control" id="exampleInputphone" aria-describedby="phoneHelp">
                             <span class="text-warning">
                                 @error('phone')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>
                         <div class="mb-3">
                             <label for="exampleInputaddress" class="form-label">Address</label>
                             <input type="text" name="address" value="{{old('address',$officeSetting->address) }}" class="form-control" id="exampleInputaddress" aria-describedby="addressHelp">
                             <span class="text-warning">
                                 @error('address')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>
                         <div class="mb-3">
                             <label for="exampleInputlogo" class="form-label">Logo</label>
                             <img src="{{$officeSetting->logo}}" height="100" width="100" alt="Logo">
                             <input type="file" name="logo" value="{{old('logo',$officeSetting->logo) }}" class="form-control" id="exampleInputlogo" aria-describedby="logoHelp">
                             <span class="text-warning">
                                 @error('logo')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>
                         <div class="mb-3">
                             <label for="exampleInputfavicon_logo" class="form-label">Favicon_logo</label>
                             <img src="{{$officeSetting->favicon_logo}}" alt="">
                             <input type="file" name="favicon_logo" value="{{old('favicon_logo',$officeSetting->favicon_logo) }}" class="form-control" id="exampleInputfavicon_logo" aria-describedby="favicon_logoHelp">
                             <span class="text-warning">
                                 @error('favicon_logo')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>
                         <div class="mb-3">
                             <label for="exampleInputwebsite_url" class="form-label">Website_url</label>
                             <input type="text" name="website_url" value="{{old('website_url',$officeSetting->website_url) }}" class="form-control" id="exampleInputwebsite_url" aria-describedby="website_urlHelp">
                             <span class="text-warning">
                                 @error('website_url')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>
                         <div class="mb-3">
                             <label for="exampleInputinstagram_url" class="form-label">Instagram_url</label>
                             <input type="text" name="instagram_url" value="{{old('instagram_url',$officeSetting->instagram_url) }}" class="form-control" id="exampleInputinstagram_url" aria-describedby="instagram_urlHelp">
                             <span class="text-warning">
                                 @error('instagram_url')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>
                         <div class="mb-3">
                             <label for="exampleInputtiktok_url" class="form-label">Tiktok_url</label>
                             <input type="text" name="tiktok_url" value="{{old('tiktok_url',$officeSetting->tiktok_url) }}" class="form-control" id="exampleInputtiktok_url" aria-describedby="tiktok_urlHelp">
                             <span class="text-warning">
                                 @error('tiktok_url')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>
                         <div class="mb-3">
                             <label for="exampleInputfacebook_url" class="form-label">Facebook_url</label>
                             <input type="text" name="facebook_url" value="{{old('facebook_url',$officeSetting->facebook_url) }}" class="form-control" id="exampleInputfacebook_url" aria-describedby="facebook_urlHelp">
                             <span class="text-warning">
                                 @error('facebook_url')
                                 {{$message}}
                                 @enderror
                             </span>

                         </div>


                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>




                 </div>
             </div>
         </div>
         <!--/ Data Tables -->
     </div>
 </div>
 @endsection