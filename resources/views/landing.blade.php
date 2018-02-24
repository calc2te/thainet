@extends('layouts.master')

@section('style')
@endsection

@section('content')
    <div class="slider">
    <div><img src="{{ asset('images/banner/banner1.png') }}" /></div>
    <div><img src="{{ asset('images/banner/banner2.png') }}" /></div>
    <div><img src="{{ asset('images/banner/banner3.png') }}" /></div>
    </div>

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
