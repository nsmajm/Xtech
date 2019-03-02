@extends('layouts.mainLayout')


@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Product Add Form</h2>
                <form action="{{route('product.update')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="productId">
                    <div class="form-group row">
                        <label for="p_name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$product->name}}" name="p_name" id="p_name" placeholder="Enter Product Name"> </div>
                    </div>
                    <div class="form-group row">
                        <label for="p_name" class="col-sm-3 col-form-label">Product SubName</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$product->subName}}" name="subName" id="subName" placeholder="Enter Product Sub Name"> </div>
                    </div>
                    <div class="form-group row">
                        <label for="p_description" class="col-sm-3 col-form-label">Product Description</label>
                        <div class="col-sm-9">
                            <textarea name="p_description" id="p_description"class="form-control">{{$product->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="p_description" class="col-sm-3 col-form-label">Product Category</label>
                        <div class="col-sm-9">
                            <select class="form-control c_type"  name="c_type">
                                @foreach($categories as $category)
                                    <option value="{{$category->c_name}}" {{ $category->c_name == $product->c_name ? 'selected="selected"' : '' }}>{{$category->c_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="p_description" class="col-sm-3 col-form-label">Product Slider Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="productSlider[]" id="productSliderImage" class="file-upload-default" multiple>
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                          </span>
                            </div>
                            <div class="container">

                                    <div id="sliderPreview">
                                        <div class="row mt-5">
                                        @foreach($slideImages as $image)
                                            <div class="col-3">
                                                <span>
                                                    <button type="button" class="btn btn-danger"
                                                            data-panel-id="{{$image->id}}" onclick="deleteSlideImage(this)">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </span>
                                                <img class="img-thumbnail" class="btn btn-danger" src="{{url('public/')}}.{{$image->image_path}}" alt="">
                                            </div>
                                        @endforeach
                                    </div>
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
                            <div class="container">
                                <div id="imagePreview">
                                    <div class="row mt-5">
                                    @foreach($tabImages as $image)
                                        <div class="col-3">
                                            <span>
                                                <button type="button" data-panel-id="{{$image->id}}" onclick="deleteTabImage(this)" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </span>
                                            <img class="img-thumbnail" src="{{url('public/')}}{{$image->image_path}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
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

        function deleteSlideImage(x){
            $.confirm({
                title: 'You Want to delete?',
                content: '',
                buttons: {
                    confirm: function () {
                        var id = $(x).data('panel-id');
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('product.deleteSlideImage') !!}",
                            cache: false,
                            data: {_token: "{{csrf_token()}}",'id': id},
                            success: function (data) {
                                $('#sliderPreview').load(location.href +' #sliderPreview');
                                $.alert('Image Deleted Successfully!');
                            }
                        });
                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    }
                }
            });
        }

        function deleteTabImage(x) {
            $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {
                    confirm: function () {
                        var id = $(x).data('panel-id');
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('product.deleteTabImage') !!}",
                            cache: false,
                            data: {_token: "{{csrf_token()}}",'id': id},
                            success: function (data) {
                                $('#imagePreview').load(location.href +' #imagePreview');
                                $.alert('Image Deleted Successfully!');
                            }
                        });

                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    }
                }
            });







        }

    </script>
    @endsection