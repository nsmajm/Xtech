@extends('layouts.websiteLayout')
@section('css')
    <style>
        .item-tabs-sec .nav {
            border-bottom: 1px solid #e5e5e5;
            float: right !important;
            margin-bottom: 50px;
        }

    </style>
    @endsection
@section('content')
    <div id="content">

        <!-- Products -->
        <section class="padding-bottom-20">
            <div class="container-fluid">
                <div class="item-tabs-sec">

                    <!-- Nav tabs -->
                    <div class="container">
                        <ul class="nav" role="tablist" style="float: right">
                            <li role="presentation" class="active"><a href="#pro-detil" role="tab" data-toggle="tab">Overview</a></li>
                            <li role="presentation"><a href="#cus-rev" role="tab" data-toggle="tab">Specification</a></li>
                            <li role="presentation"><a href="#ship" role="tab" data-toggle="tab">Service</a></li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="pro-detil">
                            <div class="row">
                                <!-- Products -->
                                <div class="col-md-12">
                                    <div class="product-detail ">
                                        <div class="product container">
                                            <div class="row">
                                                <!-- Slider Thumb -->
                                                <div class="col-xs-5">
                                                    <article class="slider-item on-nav">
                                                        <div class="thumb-slider">
                                                            <ul class="slides">
                                                                @foreach($productSlider as $slideImage)
                                                                <li data-thumb="{{url('public/')}}.{{$slideImage->image_path}}">
                                                                    <img src="{{url('public/')}}.{{$slideImage->image_path}}"  alt="" >
                                                                </li>
                                                                    @endforeach
                                                            </ul>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- Item Content -->
                                                <div class="col-xs-7">
                                                    <h5>{{$product->name}} / {{$product->c_name}} / {{$product->subName}}</h5>
                                                    <br>
                                                    <!-- List Details -->
                                                    <ul class="bullet-round-list">
                                                        {{$product->description}}
                                                    </ul>
                                                    <!-- Colors -->


                                            </div>
                                        </div>

                                        <!-- Details Tab Section-->

                                    </div>
                                        <div class="tab_image">
                                            @foreach($tabImage as $tabImg)
                                                <img width="100%" src="{{url('public/')}}.{{$tabImg->image_path}}" alt="">
                                                @endforeach
                                        </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="cus-rev">
                          <div class="container">
                              <div class="title">HARDWARE FEATURES</div>
                              <table class="table">
                                  <tbody>
                                  @foreach($specList as $list)
                                      <tr>
                                          <td width="30%">{{$list->spec_name}}</td>
                                          <td width="70%">{!! nl2br($list->spec_value) !!}</td>
                                      </tr>
                                  @endforeach
                                  </tbody>
                              </table>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="ship">
                            <div class="container">
                                {{--<div class="bg-primary"><h4 style="color: #fff; padding: 20px;">Download Files</h4></div>--}}
                                <table class="table table-responsive table-striped" >
                                    <th width="60%">Files</th>
                                    <th width="10%">type</th>
                                    <th width="10%">Date</th>
                                    <th width="20%">Download</th>
                                    <tbody style="border: none !important;">
                                    @foreach($fileLists as $list)
                                    <tr>
                                        <td>{{$list->files_name}}</td>
                                        <td>{{$list->file_type}}</td>
                                        <td>{{\Carbon\Carbon::parse($list->created_at)->format('Y-m-d')}}</td>
                                        <td><a download="{{$list->file_path}}" href="{{url('public').$list->file_path}}">
                                                <button class="btn btn-sm btn-success" style="background:#5cb85c;font-size: 14px; ">
                                                    <i class="fa fa-download"></i> Download</button>
                                            </a></td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                                {{--<div class="bg-primary"><h4 style="color: #fff; padding: 20px;">Faq</h4></div>--}}
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <table class="table table-responsive">
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <tbody>
                                    @foreach($faqLists as $list)
                                            <tr>
                                                <td width="50%">{{$list->faq_question}}</td>
                                                <td width="50%">{{$list->faq_answer}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection