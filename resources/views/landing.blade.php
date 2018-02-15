@extends('layouts.master')

@section('style')
@endsection

@section('content')
    <style>
        .header-top {height:38px;background-color:#fefefe;}
        .header-top menu {float:right;}
        .header-top li {float:left;position:relative;height:26px;font-size:13px;padding-top:12px;padding-right:18px;}

        .header {display:flex;justify-content:center;height:80px;}
        .header li {float:left;padding:0 40px;font-size:20px;line-height:80px;}
    </style>

    <header>
        <div class="header-top">
            <menu>
            	<li><a href="#;">로그인</a></li>
            	<li><a href="#;">회원가입</a></li>
                <li><a href="#;">고객센터</a></li>
            </menu>
        </div>

        <div class="header top-border">
                <li>LOGO</li>
                <li><a href="#menu1">Menu 1</a></li>
                <li><a href="#menu2">Menu 2</a></li>
                <li><a href="#menu3">Menu 3</a></li>
                <li><a href="#menu4">Menu 4</a></li>
        </div>
    </header>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <style>
        .bx-wrapper {border:none; box-shadow: none;margin-bottom: 0px;}
        .bx-wrapper img {width:100%;height:400px;}

        .slider img {visibility:hidden;}
    </style>

    <div class="slider">
    <div><img src="{{ asset('images/banner/banner1.png') }}" /></div>
    <div><img src="{{ asset('images/banner/banner2.png') }}" /></div>
    <div><img src="{{ asset('images/banner/banner3.png') }}" /></div>
    </div>

    <style>
        .container {margin:0 auto;width:1080px}
        
        .banner .banner-title {padding:14px 0;color:#333;font-size:24px;font-weight:bold;}
        .banner .banner-title-big {font-size:36px;}
        .banner .banner-box {border:1px solid #ededed;cursor:pointer;}
        /* .banner .banner-box:hover {border:1px solid #007bff;} */

        .banner-2 > div.box {float:left;width:calc(50% - 15px);}
        .banner-2 > div.box:nth-child(1) {margin-right:30px;}
        .banner-2 img {width:100%;}

        .banner-4 .list > div.box {float:left;width:calc(25% - 6px);margin-right:8px;margin-bottom:20px;border:1px solid #ededed;}
        .banner-4 .list > div.box:nth-child(4n) {margin-right:0px;}
        .banner-4 img {width:100%;}
        /* .banner-4 .list > div.box:hover {border:1px solid #007bff} */
        .banner .list > div.box > div {padding:10px;}

    </style>

    <div class="container">
        <div class="banner banner-2">
            <div class="box">
                <div class='banner-title banner-title-big'>HOT</div>
                <div class='banner-box box'>
                    <img src="{{ asset('images/banner/banner1.png') }}" />
                    <div class="" style="padding:10px;">
                        <h4><strong>서울 서울타이</strong></h4>
                        <span>서울 서울구 서울동 11-11 서울빌딩 1층</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class='banner-title banner-title-big'>NEW</div>
                <img src="{{ asset('images/banner/banner1.png') }}" />
            </div>
            <div class="clear"></div>
        </div>

        <div class="divide"></div>

        <div class="banner banner-4">
            <div class='banner-title'>BEST</div>

            <div class="list">
                <?php for($i = 0; $i < 10; $i++) : ?>
                    <div class="banner-box box">
                        <img src="{{ asset('images/banner/banner1.png') }}" />
                        <div class="">
                            <strong>서울 서울타이</strong><br />
                            <span>서울 서울구 서울동 11-11 서울빌딩 1층</span>
                        </div>
                        <div class="">10,000</div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
    $(document).ready(function(){
        $('.slider').bxSlider({
            mode: 'fade',
            speed: 1000,
            pager: false,
            controls: false,
            auto: true,
            pause: 3000,
        });

        $('.slider img').each( function() {
            $(this).css('visibility','visible')
        });
    });

    $(document).on('click', '.banner-box', function(e) {
        console.log(e);

        location.href = './detail'
    });
    </script>
@endsection
