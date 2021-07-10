<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="fb:admins" content="{{ __('237549811289563') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('meta_elements')
    @show
    
    
    <!-- favicon icon -->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('frontend/images/favicon.ico') }}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/themify-icons.css') }}" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.css') }}" />


    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/layers.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/settings.css') }}">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/prettyPhoto.css') }}">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/shortcodes.css') }}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}" />
    @section('headerElements')
    @show

</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0&appId=237549811289563&autoLogAppEvents=1" nonce="bhkfMQbE"></script>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->


