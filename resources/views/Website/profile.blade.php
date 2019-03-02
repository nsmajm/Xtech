@extends('layouts.websiteLayout')
@section('css')
    <style>
        .profile_header{
            background-image: url("https://www.planwallpaper.com/static/images/417259_hOUJuyi.jpg");
            max-width: 100%;
            height: 450px;
        }
        .shadow{
            width: 100%;
            height: 200px;
        }

        .profile_title_h3{
            font-size: 30px;
            padding-bottom: 20px;
            text-align: center;
            color: #fff;
        }
        .profile_title_h4{
            font-size: 18px;
            text-align: center;
            color: #fff;
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
            padding: 21px 30px;
        }
        .contact-details{
            background: #000;
            width: 100%;
            height: auto;

        }
        .contact-text{
            color: #fff;
            font-size: 14px;
            font-weight: 400;
            line-height: 2;
        }
        .contact-info{
            margin-bottom: 100px;
            margin-top: 100px;
        }
        .contact-info h5 ,p,h6{
            color: #fff;

        }
.profile-details>p{
    color: #000;
}
    </style>
    @endsection
@section('content')
    <div class="row profile_header">
        <div class="profile text-center margin-top-100">

            <h3 class="profile_title_h3">Profile</h3>
            <h4 class="profile_title_h4"> All For Better NetWorking</h4>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item active">
            <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Milestone</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade in active" id="home" role="tabpanel" aria-labelledby="home-tab">
           <div class="container mb-5">
                <div class="profile-details margin-top-50 margin-bottom-50">
                    <p>Founded in 1999, Tenda Technology is a globally recognized leading supplier of networking devices and equipment. Tenda is committed to producing easy-to-install and affordable networking solutions. We offer innovative, cutting-edge products to help people realize their full computing potential.</p>
                    <br>
                    <p>Innovation is the heart and soul of Tenda Technology. Tenda has two R&D centers with over 1,000 employees - one facility in Shenzhen and the other in Chengdu. The company has one manufacturing center, with about 3,000 staff members, and a new 1,300,000 square foot manufacturing facility under construction.</p>
                    <br>
                    <p>Tenda products include home and business networking solutions, switches, broadband CPE, gateways, powerlines, mobile broadband, and IP cameras to name only a few. Excellent performance, reliability, easy to install and use, top-quality, and competitive pricing are hallmarks of all Tenda products.</p>
                    <br>
                    <p>Tenda attracts world class talent through its collaborative culture. Nearly 120 graduates from top universities join Tenda each year and all contribute to Tenda's research and development efforts.</p>
                    <br>
                    <p>Excellent companies must have dependable strategic partners. To this end, Tenda established a strategic partnership with Broadcom in 2012 and soon became the most important partner of Broadcom in China. Tenda has adopted Broadcom's chip, which is similar to that of Apple devices, to deliver best-in-class performance in all Tenda products.</p>
                    <p>Based in Shenzhen, China, Tenda has quickly expanded its business into worldwide markets. To date, Tenda has established more than 10 branches and 50 offices in China alone, plus offices in many other key markets. In 2007, Tenda launched its global branding strategy. Through its worldwide distribution channels, Tenda offers products in more than 100 countries. By the third quarter of 2014, total sales amounted to over 500 million USD. Always placing customers first, Tenda employs a customer service team of more than 160 employees, each having the responsibility to solve problems for both distributors and consumers in every market.</p>
                    <p>As the first home-grown router and wireless network device manufacturer in China, Tenda has overcome all kinds of obstacles. Combining R&D, manufacturing and sales together, Tenda has adopted the latest technology and professional service systems to become one of the most reliable networking solutions manufacturers in the world.

                        Mission & Vision: Speed, secure and intelligent network solutions, anywhere and anytime.</p>


                </div>
           </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row" style="margin-right: 0px">
                    <div class="contact-details" style="">
                       <div class="container ">
                           <div class="row">
                               <div class="col-md-4">
                                   <div class="contact-info">
                                       <h5>Bangladesh Office</h5>
                                       <p>Xtech Corporation</p>
                                       <hr>
                                       <p>Register Office:</p>
                                       <h6> Address:</h6>
                                       <p>Cha-66/1/A, North Badda, Gulshan,
                                           Dhaka–1212, Bangladesh.</p>
                                       <h6>Phone:</h6>
                                       <p>+88 09638 111 555</p>
                                       <h6>Cell</h6>
                                       <p>+88 019888 17 631</p>
                                       <h6>Email:</h6>
                                       <p>info@xtechcorporation.com</p>
                                       <h6>WebSite:</h6>
                                       <p>www.xtechcorporation.com</p>
                                   </div>
                               </div>

                               <div class="col-md-offset-2 col-md-4">
                                   <div class="contact-info">
                                       <h5>China Office:</h5>
                                       <p>Xtech Corporation</p>
                                       <hr>
                                       <h6> Address:</h6>
                                       <p>3d-floor, Industrial Building,Industrial North 4th Road,
                                           Songshan Lake Area, Dongguan City,</p>
                                        <p>Guangdong Province,Post Code:523808, China</p>
                                       <h6>Cell</h6>
                                       <p>+88 019888 17 631</p>
                                   </div>
                               </div>

                           </div>
                       </div>
                    </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="container">
                <div class="text-center mt-4 mb-4">
                    <h1>there is no Milestone</h1>
                </div>
            </div>
        </div>
    </div>
    @endsection