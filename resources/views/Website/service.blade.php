@extends('layouts.websiteLayout')

@section('css')
    <style>
        body{
            overflow-x: hidden;
        }
        .serviceSection{
            background-image: url("https://images.pexels.com/photos/326055/pexels-photo-326055.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            object-fit: cover;
            background-repeat: no-repeat;
            max-width:100%;
            height: 600px;

        }
            .serviceTitle{
                color: #fff;
                padding-bottom: 30px;
                font-size: 36px;
                font-weight: 700;
                letter-spacing: 1px;
            }
            .serviceSubHeading{
                color: #fff;
                padding-bottom: 30px;
                font-size: 24px;
                font-weight: 100;
            }
            .text-white{
                color: #fff;
            }
        .serviceSecond{
            background:#F2F2F2!important;
        }

        .col-md-4.item_list.text-center {
            padding: 60px 20px 60px;
            background: #fff;
            color: #333;;
            box-shadow: 0 8px 15px rgba(125, 147, 178, .25);
        }
        .small-box{
            width: 40px;
            height: 2px;
            border-radius: 10%;
            text-align: center;
            position: relative;
            left: 42%;
            background-color: #fd4f00
        }
        .col-md-4.item_list.support_list.text-center {
            background: #f7f8f9;
            box-shadow: 0 8px 15px rgba(125, 147, 178, .35);
        }

    </style>
    @endsection

@section('content')
    <div class="row">
       <div class="col-md-12 serviceSection text-center">
               <div class="serviceList margin">
                   <h1 class="serviceTitle margin-top-100">WELCOME TO SUPPORT</h1>
                   <h2 class="serviceSubHeading ">All For Better NetWorking</h2>
                   <h5 class="text-white">How to find the product model on a Tenda device?</h5>
               </div>
       </div>
    </div>
    <div class="row serviceSecond">
        <h1 class='s_second_title text-center margin-top-100'>
            Service
        </h1>

        <div class="container margin-top-100 margin-bottom-100 na">
                <div class="row">
                    <a href="#">
                        <div class="col-md-4 item_list text-center">
                            <div class="col-md-12">
                                <i class="flaticon-telephone" style="font-size: 55px"></i>
                                <h3 style="color: #333;;">Contact Us</h3>
                                <div class="small-box"></div>
                                Contact Us
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="col-md-4 item_list text-center">
                            <div class="col-md-12">
                                <i class="flaticon-telephone" style="font-size: 55px"></i>
                                <h3>Contact Us</h3>
                                <div class="small-box"></div>
                                Contact Us
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="col-md-4 item_list text-center">
                            <div class="col-md-12">
                                <i class="flaticon-telephone" style="font-size: 55px"></i>
                                <h3>Contact Us</h3>
                                <div class="small-box"></div>
                                Contact Us
                            </div>
                        </div>
                    </a>

                </div>
            <div class="row margin-top-10">
                <a href="#">
                    <div class="col-md-4 item_list text-center">
                        <div class="col-md-12">
                            <i class="flaticon-telephone" style="font-size: 55px"></i>
                            <h3>Contact Us</h3>
                            <div class="small-box"></div>
                            Contact Us
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="col-md-4 item_list text-center">
                        <div class="col-md-12">
                            <i class="flaticon-telephone" style="font-size: 55px"></i>
                            <h3>Contact Us</h3>
                            <div class="small-box"></div>
                            Contact Us
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="col-md-4 item_list text-center">
                        <div class="col-md-12">
                            <i class="flaticon-telephone" style="font-size: 55px"></i>
                            <h3>Contact Us</h3>
                            <div class="small-box"></div>
                            Contact Us
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>


    <div class="row third margin-top-80 margin-bottom-80">
        <h1 class='s_third_title text-center'>
            Get product support
        </h1>
        <div class="container">
            <div class="row margin-top-100">
                <a href="#">
                    <div class="col-md-4 item_list support_list text-center">
                        <div class="col-md-12">
                            <i class="flaticon-telephone" style="font-size: 55px"></i>
                            <h3 style="color: #333;;">Contact Us</h3>
                            <div class="small-box"></div>
                            Contact Us
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="col-md-4 item_list support_list text-center">
                        <div class="col-md-12">
                            <i class="flaticon-telephone" style="font-size: 55px"></i>
                            <h3>Contact Us</h3>
                            <div class="small-box"></div>
                            Contact Us
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="col-md-4 item_list support_list text-center">
                        <div class="col-md-12">
                            <i class="flaticon-telephone" style="font-size: 55px"></i>
                            <h3>Contact Us</h3>
                            <div class="small-box"></div>
                            Contact Us
                        </div>
                    </div>
                </a>

            </div>
            <div class="row margin-top-10">
                <a href="#">
                    <div class="col-md-4 item_list support_list text-center">
                        <div class="col-md-12">
                            <i class="flaticon-telephone" style="font-size: 55px"></i>
                            <h3 style="color: #333;;">Contact Us</h3>
                            <div class="small-box"></div>
                            Contact Us
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="col-md-4 item_list support_list text-center">
                        <div class="col-md-12">
                            <i class="flaticon-telephone" style="font-size: 55px"></i>
                            <h3>Contact Us</h3>
                            <div class="small-box"></div>
                            Contact Us
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="col-md-4 item_list support_list text-center">
                        <div class="col-md-12">
                            <i class="flaticon-telephone" style="font-size: 55px"></i>
                            <h3>Contact Us</h3>
                            <div class="small-box"></div>
                            Contact Us
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
    @endsection