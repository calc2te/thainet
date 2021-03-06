@extends('_layouts.master')

@section('style')
@endsection

@section('content')
    <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/banner/banner1.png') }}">
        <div class="parallax-title">서울 서울타이</div>
    </div>

    <div class="container">
        <div class="divide"></div>

        <div class="detail-image">
            <img src="{{ asset('uploads/sample.jpg') }}" />
        </div>

        <div class="divide"></div>

        <div class="detail-title">후기</div>
        <div class="detail-review-container">
            <div class="detail-review-box border-bottom">
                <div class="star">
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                </div>
                <div class="msg">여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. </div>
                <div class="clear"></div>
            </div>
            <div class="detail-review-box border-bottom">
                <div class="star">
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                </div>
                <div class="msg">여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. </div>
                <div class="clear"></div>
            </div>
            <div class="detail-review-box border-bottom">
                <div class="star">
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                    <img src="{{ asset('images/star.png') }}" />
                </div>
                <div class="msg">여기 정말 좋았습니다.</div>
                <div class="clear"></div>
            </div>

            <div class="divide"></div>

            <div class="detail-title">장소</div>
            <div id="map" style="width:100%;height:400px;"></div>

            <div class="divide"></div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=45a691234820f62e66ff3160d9f954a2"></script>

    <script>
        $('.parallax-window').parallax({imageSrc: '{{ asset("images/banner/banner1.png") }}'});

        var mapContainer = document.getElementById('map'), // 지도를 표시할 div
          mapOption = {
                center: new daum.maps.LatLng(37.54699, 127.09598), // 지도의 중심좌표
                level: 4, // 지도의 확대 레벨
                scrollwheel: false
            };

        var map = new daum.maps.Map(mapContainer, mapOption);

        // 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
        var zoomControl = new daum.maps.ZoomControl();
        map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);

        var imageSrc = '{{ asset("images/marker.png") }}', // 마커이미지의 주소입니다
            imageSize = new daum.maps.Size(64, 69), // 마커이미지의 크기입니다
            imageOption = {offset: new daum.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

        // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
        var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOption),
            markerPosition = new daum.maps.LatLng(37.54699, 127.09598); // 마커가 표시될 위치입니다

        // 마커를 생성합니다
        var marker = new daum.maps.Marker({
          position: markerPosition,
          image: markerImage // 마커이미지 설정
        });

        // 마커가 지도 위에 표시되도록 설정합니다
        marker.setMap(map);

        // 커스텀 오버레이에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
        var content = '<div class="customoverlay">' +
            '  <a href="http://map.daum.net/link/map/11394059" target="_blank">' +
            '    <span class="title">구의야구공원</span>' +
            '  </a>' +
            '</div>';

        // 커스텀 오버레이가 표시될 위치입니다
        var position = new daum.maps.LatLng(37.54699, 127.09598);

        // 커스텀 오버레이를 생성합니다
        var customOverlay = new daum.maps.CustomOverlay({
            map: map,
            position: position,
            content: content,
            yAnchor: 1
        });
    </script>
@endsection
