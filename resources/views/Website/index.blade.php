@extends('layouts.websiteLayout')
@section('css')
    <style>
        article{
            border: none !important;
        }
        .product_title{
            padding: 0px;
            margin: 0px;
            text-align: center;
            overflow: hidden;
            font-weight: normal;
            padding-top: 1em;
            padding-bottom: 0.5em;
            font-size: 24px;
        }
        .product-description{
            color: #555;
            font-size: 14px;
            text-align: center;
            height: 40px;
            line-height: 20px;
            overflow: hidden;
        }
        .nav-tabs, .nav-pills {
            text-align: center;
            background: #efefef;
        }
        .nav-tabs > li, .nav-pills > li {
            float:none;
            display:inline-block;
            *display:inline; /* ie7 fix */
            zoom:1; /* hasLayout ie7 trigger */
        }

        .nav-tabs, .nav-pills {
            text-align:center;
        }
        .nav>li>a {
            position: relative;
            display: block;
            padding: 21px 78px;
        }
        .slid-sec{
            margin-bottom: 0px!important;
        }
    </style>

    @endsection
@section('content')
    <section class="slid-sec with-bg-wide">
        <!-- Main Slider Start -->
        <div class="tp-banner-container">
            <div class="tp-banner-full">
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="https://www.tendacn.com/us/UserFiles/Config/2018720/20187201634371542.jpg"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

                        {{--<!-- LAYER NR. 1 -->--}}
                        {{--<div class="tp-caption sfl tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="-80"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="800"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="chars"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.03"--}}
                             {{--data-endelementdelay="0.4"--}}
                             {{--data-endspeed="300"--}}
                             {{--style="z-index: 5; font-size:24px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">Find the right washer for you </div>--}}

                        {{--<!-- LAYER NR. 2 -->--}}
                        {{--<div class="tp-caption sfr tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="-40"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1000"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="chars"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.03"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="300"--}}
                             {{--style="z-index: 6; font-size:36px; color:#f12a43; font-weight:800; white-space: nowrap;">Activewash™ G129</div>--}}

                        {{--<!-- LAYER NR. 1 -->--}}
                        {{--<div class="tp-caption sfr tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="10"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1300"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="chars"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.03"--}}
                             {{--data-endelementdelay="0.4"--}}
                             {{--data-endspeed="300"--}}
                             {{--style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$550.00 </div>--}}
                        {{--<!-- LAYER NR. 1 -->--}}
                        {{--<div class="tp-caption sfl tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="100"--}}
                             {{--data-y="bottom" data-voffset="0"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1300"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-elementdelay="0.1"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="300"--}}
                             {{--data-scrolloffset="0"--}}
                             {{--style="z-index: 9;"><img src="images/slide-item-4-1.png" alt="" > </div>--}}

                        {{--<!-- LAYER NR. 4 -->--}}
                        {{--<div class="tp-caption lfb tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="100"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1300"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-elementdelay="0.1"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="300"--}}
                             {{--data-scrolloffset="0"--}}
                             {{--style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>--}}
                    </li>

                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="{{url('public/web/images/slide2.png')}}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 1 -->
                        {{--<div class="tp-caption sfl tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="-80"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="800"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="chars"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.03"--}}
                             {{--data-endelementdelay="0.4"--}}
                             {{--data-endspeed="300"--}}
                             {{--style="z-index: 5; font-size:24px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">High Quality VR Glasses </div>--}}

                        {{--<!-- LAYER NR. 2 -->--}}
                        {{--<div class="tp-caption sfr tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="-40"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1000"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="chars"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.03"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="300"--}}
                             {{--style="z-index: 6; font-size:36px; color:#f12a43; font-weight:800; white-space: nowrap;">3D Daydream View</div>--}}

                        {{--<!-- LAYER NR. 1 -->--}}
                        {{--<div class="tp-caption sfr tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="10"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1300"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="chars"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.03"--}}
                             {{--data-endelementdelay="0.4"--}}
                             {{--data-endspeed="300"--}}
                             {{--style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$550.00 </div>--}}
                        {{--<!-- LAYER NR. 1 -->--}}
                        {{--<div class="tp-caption sfl tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="0"--}}
                             {{--data-y="center" data-voffset="0"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1300"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-elementdelay="0.1"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="300"--}}
                             {{--data-scrolloffset="0"--}}
                             {{--style="z-index: 9;"><img src="images/slide-item-4-2.png" alt="" > </div>--}}

                        {{--<!-- LAYER NR. 4 -->--}}
                        {{--<div class="tp-caption lfb tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="100"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1300"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-elementdelay="0.1"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="300"--}}
                             {{--data-scrolloffset="0"--}}
                             {{--style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>--}}
                    </li>

                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="https://www.tendacn.com//us/UserFiles/Config/2018816/2018816946232682.jpg"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

                        {{--<!-- LAYER NR. 1 -->--}}
                        {{--<div class="tp-caption sfl tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="-80"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="800"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="chars"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.03"--}}
                             {{--data-endelementdelay="0.4"--}}
                             {{--data-endspeed="300"--}}
                             {{--style="z-index: 5; font-size:24px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">Wireless speaker that fills your home with music. </div>--}}

                        {{--<!-- LAYER NR. 2 -->--}}
                        {{--<div class="tp-caption sfr tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="-40"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1000"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="chars"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.03"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="300"--}}
                             {{--style="z-index: 6; font-size:36px; color:#f12a43; font-weight:800; white-space: nowrap;">Speaker M5 Audio</div>--}}

                        {{--<!-- LAYER NR. 1 -->--}}
                        {{--<div class="tp-caption sfr tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="10"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1300"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-splitin="chars"--}}
                             {{--data-splitout="none"--}}
                             {{--data-elementdelay="0.03"--}}
                             {{--data-endelementdelay="0.4"--}}
                             {{--data-endspeed="300"--}}
                             {{--style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$550.00 </div>--}}
                        {{--<!-- LAYER NR. 1 -->--}}
                        {{--<div class="tp-caption sfl tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="100"--}}
                             {{--data-y="center" data-voffset="25"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1300"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-elementdelay="0.1"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="300"--}}
                             {{--data-scrolloffset="0"--}}
                             {{--style="z-index: 9;"><img src="images/slide-item-4-3.png" alt="" > </div>--}}

                        {{--<!-- LAYER NR. 4 -->--}}
                        {{--<div class="tp-caption lfb tp-resizeme"--}}
                             {{--data-x="left" data-hoffset="600"--}}
                             {{--data-y="center" data-voffset="100"--}}
                             {{--data-speed="800"--}}
                             {{--data-start="1300"--}}
                             {{--data-easing="Power3.easeInOut"--}}
                             {{--data-elementdelay="0.1"--}}
                             {{--data-endelementdelay="0.1"--}}
                             {{--data-endspeed="300"--}}
                             {{--data-scrolloffset="0"--}}
                             {{--style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>--}}
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <div id="product_tab_list">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item active">
                <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">MESH</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ROUTER</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">SWITCH</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#POWERLINE" role="tab" aria-controls="contact" aria-selected="false">POWERLINE</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade in active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container margin-top-10">
                        <div class="row">
                            @foreach($products->where('c_name','Mesh') as $product)
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
                    </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container margin-top-100">
                    <div class="row">
                        @foreach($products->where('c_name','Router') as $product)
                            <div class="col-md-3">
                                <div class="product">

                                    <article>
                                        <a href="{{route('singleProduct',$product->id)}}">
                                            @if(\App\Http\Controllers\HomeController::getSliderImage($product->id)=='NULL')
                                                <img class="img-responsive"
                                                     src="Null"
                                                     alt="" >
                                                @else
                                            <img class="img-responsive"
                                                 src="{{url('public/')}}.{{\App\Http\Controllers\HomeController::getSliderImage($product->id)}}"
                                                 alt="" >
                                                @endif
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
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container margin-top-100">
                    <div class="row">
                        @foreach($products->where('c_name','Switch') as $product)
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
                </div>
            </div>
            <div class="tab-pane fade" id="POWERLINE" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container margin-top-100">
                    <div class="row">
                        @foreach($products->where('c_name','Powerline') as $product)
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
                </div>
            </div>
        </div>
    </div>

    <!-- Tab Section -->
    {{--<section class="main-tabs-sec padding-bottom-60">--}}
        {{--<div class="container">--}}
            {{--<ul class="nav margin-bottom-40" role="tablist" style="box-shadow: 0 8px 15px rgba(125, 147, 178, .25)">--}}
                {{--<li role="presentation" class="active"><a href="#tv-au" aria-controls="featur" role="tab" data-toggle="tab"> <i class="flaticon-computer"></i> MESH </a></li>--}}
                {{--<li role="presentation"><a href="#smart" aria-controls="special" role="tab" data-toggle="tab"><i class="flaticon-smartphone"></i>ROUTER </a></li>--}}
                {{--<li role="presentation"><a href="#deks-lap" aria-controls="on-sal" role="tab" data-toggle="tab"><i class="flaticon-laptop"></i>SWITCH </a></li>--}}
                {{--<li role="presentation"><a href="#game-com" aria-controls="special" role="tab" data-toggle="tab"><i class="flaticon-gamepad-1"></i>POWERLINE </a></li>--}}
            {{--</ul>--}}

            {{--<!-- Tab panes -->--}}
            {{--<div class="tab-content">--}}
                {{--<!-- TV & Audios -->--}}
                {{--<div role="tabpanel" class="tab-pane active fade in" id="tv-au">--}}

                    {{--<!-- Items -->--}}
                    {{--<div class="item-slide-4 with-nav middle-nav">--}}

                        {{--<!-- Product -->--}}
                    {{--@foreach($products->where('c_name','Mesh') as $product)--}}
                        {{--<div class="product">--}}

                            {{--<article>--}}
                                {{--<a href="{{route('singleProduct',$product->id)}}">--}}
                                    {{--<img class="img-responsive"--}}
                                         {{--src="{{url('public/')}}.{{\App\Http\Controllers\HomeController::getSliderImage($product->id)}}"--}}
                                         {{--alt="" >--}}
                                {{--</a>--}}
                                {{--<!-- Content -->--}}
                                {{--<span class="tag">{{$product->name}}</span> <a href="#" class="tittle">{{$product->subName}}</a>--}}
                                {{--<!-- Reviews -->--}}
                                {{--<a href="{{route('singleProduct',$product->id)}}">--}}
                                    {{--<h3 class="text-center product_title">--}}
                                        {{--{{$product->name}}--}}
                                    {{--</h3>--}}
                                {{--</a>--}}

                                {{--<h4 class="text-center product-description">--}}
                                    {{--{{$product->subName}}--}}
                                {{--</h4>--}}
                            {{--</article>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Smartphones -->--}}
                {{--<div role="tabpanel" class="tab-pane fade" id="smart">--}}
                    {{--<!-- Items -->--}}
                    {{--<div class="item-col-4">--}}

                        {{--<!-- Product -->--}}
                        {{--@foreach($products->where('c_name','Router') as $product)--}}
                            {{--<div class="product">--}}

                                {{--<article>--}}
                                    {{--<img class="img-responsive"--}}
                                         {{--src="{{url('public/')}}.{{\App\Http\Controllers\HomeController::getSliderImage($product->id)}}"--}}
                                         {{--alt="" >--}}
                                    {{--<!-- Content -->--}}
                                {{--<span class="tag">{{$product->name}}</span> <a href="#" class="tittle">{{$product->subName}}</a>--}}
                                {{--<!-- Reviews -->--}}
                                    {{--<h3 class="text-center product_title">--}}
                                        {{--{{$product->name}}--}}
                                    {{--</h3>--}}
                                    {{--<h4 class="text-center product-description">--}}
                                        {{--{{$product->subName}}--}}
                                    {{--</h4>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Desk & Laptop -->--}}
                {{--<div role="tabpanel" class="tab-pane fade" id="deks-lap">--}}

                    {{--<!-- Items -->--}}
                    {{--<div class="item-col-4">--}}
                        {{--@foreach($products->where('c_name','Switch') as $product)--}}
                            {{--<div class="product">--}}

                                {{--<article>--}}
                                    {{--<img class="img-responsive"--}}
                                         {{--src="{{url('public/')}}.{{\App\Http\Controllers\HomeController::getSliderImage($product->id)}}"--}}
                                         {{--alt="" >--}}
                                    {{--<!-- Content -->--}}
                                {{--<span class="tag">{{$product->name}}</span> <a href="#" class="tittle">{{$product->subName}}</a>--}}
                                {{--<!-- Reviews -->--}}
                                    {{--<h3 class="text-center product_title">--}}
                                        {{--{{$product->name}}--}}
                                    {{--</h3>--}}
                                    {{--<h4 class="text-center product-description">--}}
                                        {{--{{$product->subName}}--}}
                                    {{--</h4>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Game Console -->--}}
                {{--<div role="tabpanel" class="tab-pane fade" id="game-com">--}}

                    {{--<!-- Items -->--}}
                    {{--<div class="item-col-4">--}}

                        {{--<!-- Product -->--}}
                        {{--@foreach($products->where('c_name','Powerline') as $product)--}}
                            {{--<div class="product">--}}

                                {{--<article>--}}
                                    {{--<img class="img-responsive"--}}
                                         {{--src="{{url('public/')}}.{{\App\Http\Controllers\HomeController::getSliderImage($product->id)}}"--}}
                                         {{--alt="" >--}}
                                    {{--<!-- Content -->--}}
                                {{--<span class="tag">{{$product->name}}</span> <a href="#" class="tittle">{{$product->subName}}</a>--}}
                                {{--<!-- Reviews -->--}}
                                    {{--<h3 class="text-center product_title">--}}
                                        {{--{{$product->name}}--}}
                                    {{--</h3>--}}
                                    {{--<h4 class="text-center product-description">--}}
                                        {{--{{$product->subName}}--}}
                                    {{--</h4>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Watches -->--}}
                {{--<div role="tabpanel" class="tab-pane fade" id="watches">--}}

                    {{--<!-- Items -->--}}
                    {{--<div class="item-col-4">--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="product">--}}
                            {{--<article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" >--}}
                                {{--<!-- Content -->--}}
                                {{--<span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>--}}
                                {{--<!-- Reviews -->--}}
                                {{--<p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>--}}
                                {{--<div class="price">$350.00</div>--}}
                                {{--<a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>--}}
                        {{--</div>--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="product">--}}
                            {{--<article> <img class="img-responsive" src="images/item-img-1-17.jpg" alt="" >--}}
                                {{--<!-- Content -->--}}
                                {{--<span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>--}}
                                {{--<!-- Reviews -->--}}
                                {{--<p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>--}}
                                {{--<div class="price">$350.00</div>--}}
                                {{--<a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>--}}
                        {{--</div>--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="product">--}}
                            {{--<article> <img class="img-responsive" src="images/item-img-1-16.jpg" alt="" > <span class="new-tag">New</span>--}}

                                {{--<!-- Content -->--}}
                                {{--<span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>--}}
                                {{--<!-- Reviews -->--}}
                                {{--<p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>--}}
                                {{--<div class="price">$350.00</div>--}}
                                {{--<a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>--}}
                        {{--</div>--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="product">--}}
                            {{--<article> <img class="img-responsive" src="images/item-img-1-12.jpg" alt="" >--}}
                                {{--<!-- Content -->--}}
                                {{--<span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>--}}
                                {{--<!-- Reviews -->--}}
                                {{--<p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>--}}
                                {{--<div class="price">$350.00</div>--}}
                                {{--<a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Accessories -->--}}
                {{--<div role="tabpanel" class="tab-pane fade" id="access">--}}

                    {{--<!-- Items -->--}}
                    {{--<div class="item-col-4">--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="product">--}}
                            {{--<article> <img class="img-responsive" src="images/item-img-1-12.jpg" alt="" >--}}
                                {{--<!-- Content -->--}}
                                {{--<span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>--}}
                                {{--<!-- Reviews -->--}}
                                {{--<p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>--}}
                                {{--<div class="price">$350.00</div>--}}
                                {{--<a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>--}}
                        {{--</div>--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="product">--}}
                            {{--<article> <img class="img-responsive" src="images/item-img-1-16.jpg" alt="" >--}}
                                {{--<!-- Content -->--}}
                                {{--<span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>--}}
                                {{--<!-- Reviews -->--}}
                                {{--<p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>--}}
                                {{--<div class="price">$350.00</div>--}}
                                {{--<a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>--}}
                        {{--</div>--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="product">--}}
                            {{--<article> <img class="img-responsive" src="images/item-img-1-15.jpg" alt="" > <span class="new-tag">New</span>--}}

                                {{--<!-- Content -->--}}
                                {{--<span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>--}}
                                {{--<!-- Reviews -->--}}
                                {{--<p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>--}}
                                {{--<div class="price">$350.00</div>--}}
                                {{--<a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>--}}
                        {{--</div>--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="product">--}}
                            {{--<article> <img class="img-responsive" src="images/item-img-1-14.jpg" alt="" >--}}
                                {{--<!-- Content -->--}}
                                {{--<span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>--}}
                                {{--<!-- Reviews -->--}}
                                {{--<p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>--}}
                                {{--<div class="price">$350.00</div>--}}
                                {{--<a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    @endsection