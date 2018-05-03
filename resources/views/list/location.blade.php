@extends('_layouts.master')

@section('style')
@endsection

@section('content')
    <div class="container">
        <div class="col-12 banner banner-4">
            <div class="mb-4">
                @foreach ($locations as $location)
                    <div class="btn btn-primary col-1 mb-1" v-on:click="location('{{ $location->name }}')">{{ $location->name }}</div>
                @endforeach
            </div>

            <div><h2>{{ $get_location }}</h2></div>
            <div class="list">
                <?php for($i = 0; $i < 5; $i++) : ?>
                <div class="banner-box box">
                    <img src="{{ asset('images/banner/banner1.png') }}" />
                    <div class="">
                        <strong>서울 서울타이</strong><br />
                        <span>서울 서울구 서울동 11-11 서울빌딩 1층</span>
                    </div>
                    <div class="">10,000 ~</div>
                </div>
                <?php endfor; ?>
            </div>

            <div class="clear"></div>
        </div>
    </div>
@endsection

@section('script')
@endsection
