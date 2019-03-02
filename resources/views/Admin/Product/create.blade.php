@extends('layouts.mainLayout')


@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Product Add Form</h2>
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group row">
                        <label for="p_name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="p_name" id="p_name" placeholder="Enter Product Name" required> </div>
                    </div>
                    <div class="form-group row">
                        <label for="p_name" class="col-sm-3 col-form-label">Product SubName</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="subName" id="subName" placeholder="Enter Product Sub Name" required> </div>
                    </div>
                    <div class="form-group row">
                        <label for="p_description" class="col-sm-3 col-form-label">Product Description</label>
                        <div class="col-sm-9">
                            <textarea name="p_description" id="p_description"class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="p_description" class="col-sm-3 col-form-label">Product Category</label>
                        <div class="col-sm-9">
                            <select class="form-control c_type"  name="c_type">
                                @foreach($categories as $category)
                                    <option value="{{$category->c_name}}">{{$category->c_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="p_description" class="col-sm-3 col-form-label">Product Slider Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="productSlider[]" id="productSliderImage" class="file-upload-default" multiple >
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                          </span>
                            </div>
                            <div class="row mt-5">
                                <div id="sliderPreview">

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="p_description" class="col-sm-3 col-form-label">Product Tab Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="productTabImage[]" id="productTabImage" class="file-upload-default" multiple>
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                          </span>
                            </div>
                            <div class="row mt-5">

                                    <div id="imagePreview">

                                    </div>


                            </div>
                        </div>
                    </div>

                    <p class="text-right"><button type="submit" class="btn btn-success mr-2">next</button></p>
                </form>
            </div>
        </div>
    </div>

    @endsection

@section('js')
   <script src="{{url('public/assets/js/shared/file-upload.js')}}"></script>
   <script>
       $(function() {
           // Multiple images preview in browser
           var imagesPreview = function(input, placeToInsertImagePreview) {

               if (input.files) {
                   var filesAmount = input.files.length;
                   for (i = 0; i < filesAmount; i++) {
                       var reader = new FileReader();
                       reader.onload = function(event) {
                           $($.parseHTML('<img>')).attr('src', event.target.result).addClass('col-3 img-thumbnail').appendTo(placeToInsertImagePreview);
                       }
                       reader.readAsDataURL(input.files[i]);
                   }
               }

           };

           $('#productTabImage').on('change', function() {
               imagesPreview(this, 'div#imagePreview');
           });

           $('#productSliderImage').on('change', function() {
               imagesPreview(this, 'div#sliderPreview');
           });
       });

   </script>
    @endsection

