@extends('layouts.websiteLayout')
@section('css')
    <style>
        .product_title{
            font-weight: 700;
            line-height: 34px;
            font-size: 18px;
            text-align: center;
        }

        .product-description{
            font-size: 14px;
            height: 40px;
            line-height: 20px;
            white-space: normal;
            width: 100%;
            overflow: hidden;
            color: #777;
        }
        .category_count{
            color: #555;
            font-size: 16px;
            margin-top: 15px;
        }
    </style>
    @endsection

@section('content')
    <div class="container margin-top-10 margin-bottom-100">
        <h3 class="category_count margin-bottom-50">{{$catName}}({{$productCount}})</h3>
        @if($productCount>0)
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
           <div class="row margin-top-50" style="justify-content: center!important;">
               <div class="col-md-4" >
                   {{ $products->links() }}
               </div>
           </div>
        @else
            <div class="container">
                <div class="alert alert-danger">Product List Empty</div>
            </div>
        @endif
    </div>
    @endsection