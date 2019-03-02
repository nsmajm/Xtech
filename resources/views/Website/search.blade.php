@extends('layouts.websiteLayout')

@section('content')
    <div class="container margin-top-100 margin-bottom-100">
        <h5 class="category_count margin-bottom-50">Total Search Result({{count($products)}})</h5>
        @if(count($products)>0)
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="product">
                            <article>
                                <a href="{{route('singleProduct',$product->id)}}">
                                    <img class="img-responsive"
                                         src="{{url('public/')}}.{{\App\Http\Controllers\HomeController::getSliderImage($product->id)}}"
                                         alt="" >
                                </a>
                                <a href="{{route('singleProduct',$product->id)}}">
                                    <h3 class="text-center product_title">
                                        {{$product->name}}
                                    </h3>
                                </a>

                                <h4 class="text-center product-description">
                                    {{$product->subName}}
                                </h4>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="container">
                <div class="alert alert-danger">Product List Empty</div>
            </div>
        @endif
    </div>
    @endsection