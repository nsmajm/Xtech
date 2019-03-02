

{{--<div class="float-sm">--}}

    {{--<div class="fl-fl float-tw">--}}
        {{--<i class="fa fa-facebook"></i>--}}
        {{--<a href="https://www.facebook.com/xtech.corporation/" target="_blank">like us!</a>--}}
    {{--</div>--}}
    {{--<div class="fl-fl float-gp">--}}
        {{--<i class="fa fa-google-plus"></i>--}}
        {{--<a href="" target="_blank">Recommend us!</a>--}}
    {{--</div>--}}
    {{--<div class="fl-fl float-rs">--}}
        {{--<i class="fa fa-rss"></i>--}}
        {{--<a href="" target="_blank">Follow via RSS</a>--}}
    {{--</div>--}}
    {{--<div class="fl-fl float-ig">--}}
        {{--<i class="fa fa-instagram"></i>--}}
        {{--<a href="" target="_blank">Follow us!</a>--}}
    {{--</div>--}}
    {{--<div class="fl-fl float-pn">--}}
        {{--<i class="fa fa-pinterest"></i>--}}
        {{--<a href="" target="_blank">Follow us!</a>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Footer -->
<footer style="background-color: #f7f7f7">
    <div class="container" style="border-top: 1px solid #efefef;">
        <div class="row">

            <!-- Contact -->
            <div class="col-md-4">
                <h4>Contact Xtech Corporation!</h4>
                <p>Register Office:</p>
                <h6> Address: <span style="font-size: 16px">Cha-66/1/A, North Badda, Gulshan,
                    Dhaka–1212, Bangladesh.</span></h6>
                <h6>Phone: <span style="font-size: 16px">+88 09638 111 555</span> </h6>
                <h6>Cell : <span style="font-size: 16px">+88 019888 17 631</span></h6>
                <h6>Email: <span style="font-size: 16px">info@xtechcorporation.com</span></h6>
                <h6>WebSite: <span style="font-size: 16px">www.xtechcorporation.com</span></h6>

            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>Categories</h4>
                <ul class="links-footer">
                    @foreach($categories as $category)
                    <li><a href="{{route('productBy.category',[$category->c_name])}}">{{$category->c_name}}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>Customer Services</h4>
                <ul class="links-footer">
                    <li><a href="#.">Shipping & Returns</a></li>
                    <li><a href="#."> Secure Shopping</a></li>
                    <li><a href="#."> International Shipping</a></li>
                    <li><a href="#."> Affiliates</a></li>
                    <li><a href="#."> Contact </a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-2">
                <h4>Information</h4>
                <ul class="links-footer">
                    <li><a href="#">Our Blog</a></li>
                    <li><a href="#"> About Our Shop</a></li>
                    <li><a href="#"> Secure Shopping</a></li>
                    <li><a href="#"> Delivery infomation</a></li>
                    <li><a href="#"> Store Locations</a></li>
                    <li><a href="#"> FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Rights -->
<div class="rights" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center">Copyright © 2019 <a href="{{route('homeapge')}}" class="ri-li"> Xtech </a> All rights reserved</p>
            </div>
        </div>
    </div>
</div>
<!-- JavaScripts -->
<script src="{{url('public/web/js/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{url('public/web/js/vendors/wow.min.js')}}"></script>
<script src="{{url('public/web/js/vendors/bootstrap.min.js')}}"></script>
<script src="{{url('public/web/js/vendors/own-menu.js')}}"></script>
<script src="{{url('public/web/js/vendors/jquery.sticky.js')}}"></script>
<script src="{{url('public/web/js/vendors/owl.carousel.min.js')}}"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{url('public/web/rs-plugin/js/jquery.tp.t.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/rs-plugin/js/jquery.tp.min.js')}}"></script>
<script src="{{url('public/web/js/main.js')}}"></script>
{{--<style>--}}
    {{--.text {--}}
        {{--margin: 0 60px;--}}
    {{--}--}}

    {{--h1 {--}}
        {{--font-size: 32px;--}}
        {{--margin-top: 0;--}}
        {{--font-family: 'Playfair Display', serif;--}}
        {{--font-weight: 400;--}}
        {{--font-style: italic;--}}
        {{--text-align: center;--}}
        {{--background: #FF7D6D;--}}
        {{--color: #fff;--}}
        {{--padding: 4px;--}}
    {{--}--}}

    {{--p,--}}
    {{--span,--}}
    {{--.twitter {--}}
        {{--font: normal normal 10px Arial;--}}
        {{--text-align: center;--}}
        {{--color: #998578;--}}
        {{--text-transform: uppercase;--}}
        {{--letter-spacing: 3px;--}}
    {{--}--}}

    {{--.twitter {--}}
        {{--color: #000000;--}}
        {{--text-decoration: none;--}}
        {{--display: block;--}}
        {{--padding: 14px;--}}
        {{---webkit-transition: all .25s ease;--}}
        {{---moz-transition: all .25s ease;--}}
        {{---ms-transition: all .25s ease;--}}
        {{---o-transition: all .25s ease;--}}
        {{--transition: all .25s ease;--}}
    {{--}--}}

    {{--.twitter:hover {--}}
        {{--color: #FF7D6D;--}}
        {{--text-decoration: none;--}}
    {{--}--}}

    {{--/*span {*/--}}
        {{--/*font-style: italic;*/--}}
        {{--/*display: block;*/--}}
    {{--/*}*/--}}

    {{--img {--}}
        {{--max-width: 100%;--}}
    {{--}--}}
    {{--/* Floating Social Media Bar Style Starts Here */--}}

    {{--.fl-fl {--}}
        {{--background: #000000;--}}
        {{--text-transform: uppercase;--}}
        {{--letter-spacing: 3px;--}}
        {{--padding: 4px;--}}
        {{--width: 190px;--}}
        {{--position: fixed;--}}
        {{--right: -160px;--}}
        {{--z-index: 1000;--}}
        {{--font: normal normal 10px Arial;--}}
        {{---webkit-transition: all .25s ease;--}}
        {{---moz-transition: all .25s ease;--}}
        {{---ms-transition: all .25s ease;--}}
        {{---o-transition: all .25s ease;--}}
        {{--transition: all .25s ease;--}}
    {{--}--}}

    {{--.fa {--}}
        {{--font-size: 20px;--}}
        {{--color: #fff;--}}
        {{--padding: 10px 0;--}}
        {{--width: 40px;--}}
        {{--margin-left: 8px;--}}
    {{--}--}}

    {{--.fl-fl:hover {--}}
        {{--right: 0;--}}
    {{--}--}}

    {{--.fl-fl a {--}}
        {{--color: #fff !important;--}}
        {{--text-decoration: none;--}}
        {{--text-align: center;--}}
        {{--line-height: 43px!important;--}}
        {{--vertical-align: top!important;--}}
    {{--}--}}

    {{--.float-fb {--}}
        {{--top: 260px;--}}
    {{--}--}}

    {{--.float-tw {--}}
        {{--top: 425px;--}}
    {{--}--}}

    {{--.float-gp {--}}
        {{--top: 470px;--}}
    {{--}--}}

    {{--.float-rs {--}}
        {{--top: 525px;--}}
    {{--}--}}

    {{--.float-ig {--}}
        {{--top: 580px;--}}
    {{--}--}}

    {{--.float-pn {--}}
        {{--top: 635px;--}}
    {{--}--}}
    {{--/* Floating Social Media Bar Style Ends Here */--}}
{{--</style>--}}
@yield('js')
</body>
</html>