<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    <!-- Document Title -->
    <title>Xtech</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/web/rs-plugin/css/settings.css')}}" media="screen" />

    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{url('public/web/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{url('public/web/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/web/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('public/web/css/main.css')}}">
    <link rel="stylesheet" href="{{url('public/web/css/style.css')}}">
    <link rel="stylesheet" href="{{url('public/web/css/responsive.css')}}">
    @yield('css')

    <!-- Fonts Online -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100i,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/web/css/custom.css')}}">
    <!-- JavaScripts -->
    <script src="{{url('public/web/js/vendors/modernizr.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        header.header-style-3 .navbar li a {
            color: #555555;
            font-weight: 600;
        }
        @media (max-width: 767px){
            header.header-style-3 .navbar {
                margin-left: 0px;
                width: 100%;
                margin-bottom: 36px;
            }
        }
        .search-container {
            position: relative;
            top: 6px;
            left: 25%;
        }
        input.searchBox {
            border-radius: 20px;
            padding: 6px 93px 6px 30px;
        }
        /*input.searchBox:hover{*/
            /*border-radius: 20px;*/
        /*}*/
        /*button#submitSearch {*/
            /*position: absolute;*/
            /*bottom: 0px;*/
            /*padding: 6px;*/
            /*right: 1px;*/
            /*border-radius: 10px;*/
            /*background: #efefef;*/
            /*color: #000;*/
        /*}*/
    </style>
</head>
<body>
