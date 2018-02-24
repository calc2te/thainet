<!DOCTYPE html>
<html>
<head>
    <title>Thainet</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="/css/app.css" rel="stylesheet" type="text/css" >

    @yield('style')

    <style>
        /* common */
        .small-msg {padding-left:4px;color:gray;font-size:14px;}

        .btn {padding:8px 14px;background-color:#007bff;color:#fff;}

        /* header */
        .header-top {height:38px;background-color:#fefefe;}
        .header-top menu {float:right;margin-right:20px;}
        .header-top li {float:left;position:relative;height:26px;font-size:13px;padding-top:12px;padding-right:18px;}

        .header {display:flex;justify-content:center;height:80px;}
        .header li {float:left;padding:0 40px;font-size:20px;line-height:80px;}

        /* slider */
        .bx-wrapper {border:none; box-shadow: none;margin-bottom: 0px;}
        .bx-wrapper img {width:100%;height:400px;}

        .slider img {visibility:hidden;}

        /* landing */
        .container {margin:0 auto;width:1080px}

        .banner .banner-title {padding:14px 0;color:#333;font-size:24px;font-weight:bold;}
        .banner .banner-title-big {font-size:36px;}
        .banner .banner-box {border:1px solid #ededed;cursor:pointer;}

        .banner-2 > div.box {float:left;width:calc(50% - 15px);}
        .banner-2 > div.box:nth-child(1) {margin-right:30px;}
        .banner-2 img {width:100%;}

        .banner-4 .list > div.box {float:left;width:calc(25% - 6px);margin-right:8px;margin-bottom:20px;border:1px solid #ededed;}
        .banner-4 .list > div.box:nth-child(4n) {margin-right:0px;}
        .banner-4 img {width:100%;}
        .banner .list > div.box > div {padding:10px;}

        /* modal */
        .modal-mask {
            position: fixed;
            z-index: 9998;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .5);
            transition: opacity .3s ease;
        }

        .modal-container {
            width: 420px;
            margin: 40px auto 0;
            padding: 20px 30px;
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
            transition: all .3s ease;
            font-family: Helvetica, Arial, sans-serif;
        }

        .modal-header h3 {
            margin-top: 0;
            color: #007bff;
        }

        .modal-body {
            margin: 10px 0;
        }

        .text-right {
            text-align: right;
        }

        .form-label {
            display: block;
            margin-bottom: 1em;
        }

        .form-label > .form-control {
            margin-top: 0.5em;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5em 1em;
            line-height: 1.5;
            border: 1px solid #ddd;
        }

        /*
         * The following styles are auto-applied to elements with
         * transition="modal" when their visibility is toggled
         * by Vue.js.
         *
         * You can easily play with the modal transition by editing
         * these styles.
         */

        .modal-enter {
          opacity: 0;
        }

        .modal-leave-active {
          opacity: 0;
        }

        .modal-enter .modal-container,
        .modal-leave-active .modal-container {
          -webkit-transform: scale(1.1);
          transform: scale(1.1);
        }

        /* detail */
        /* detail - parallax */
        .parallax-window {
            min-height: 400px;
            background: transparent;
        }
        .parallax-title {color:#fff;line-height:400px;font-size:64px;font-weight:600;text-align:center;letter-spacing:10px;}

        /* detail - detail */
        .star img {width:16px;}

        .detail-image {text-align:center;}
        .detail-image img {margin:0 auto;}
        .detail-title {margin:20px auto;font-size:24px;font-weight:600;text-align:center;}
        .detail-review-box {padding:10px;}
        .detail-review-box > .msg {float:left;width:calc(100% - 150px);}
        .detail-review-box > .star {float:left;width:150px;text-align:center;}

        .customoverlay {position:relative;left:6px;bottom:75px;border-radius:6px;border: 1px solid #ccc;border-bottom:2px solid #ddd;float:left;}
        .customoverlay:nth-of-type(n) {border:0; box-shadow:0px 1px 2px #888;}
        .customoverlay a {display:block;text-decoration:none;color:#000;text-align:center;border-radius:6px;font-size:14px;font-weight:bold;overflow:hidden;background: #007bff;background: #007bff url(http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/arrow_white.png) no-repeat right 14px center;}
        .customoverlay .title {display:block;text-align:center;background:#fff;margin:0;padding:10px 15px;font-size:14px;font-weight:bold;}
        .customoverlay:after {content:'';position:absolute;margin-left:-12px;left:50%;bottom:-12px;width:22px;height:12px;background:url('http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/vertex_white.png')}
    </style>
</head>
<body>
    <!-- template for the modal component -->
    <template id="modal-template">
        <transition name="modal">
            <div class="modal-mask" @click="close" v-show="show">
                <div class="modal-container" @click.stop>
                  <slot></slot>
                </div>
            </div>
        </transition>
    </template>

    <!-- template for the modal component -->
    <template id="new-register-modal-template">
        <modal :show="show" @close="close">
            <div class="modal-header">
                <h3>회원가입</h3>
            </div>
            <div class="modal-body">
                <label class="form-label">
                    이메일
                    <input v-model="email" class="form-control">
                </label>
                <label class="form-label">
                    비밀번호
                    <input v-model="password" type="password" class="form-control">
                </label>
                <label class="form-label">
                    비밀번호 확인
                    <input v-model="password2" type="password" class="form-control">
                </label>
                <label class="form-label">
                    <input type="checkbox" id="agree"> <label for="agree" class="small-msg">이용약관 및 개인정보 처리방침에 동의합니다.</label>
                </label>
            </div>
            <div class="modal-footer text-right">
                <button class="btn modal-default-button" @click="savePost()">
                    가입하기
                </button>
            </div>
        </modal>
    </template>

    <!-- template for the modal component -->
    <template id="new-login-modal-template">
        <modal :show="show" @close="close">
            <div class="modal-header">
                <h3>로그인</h3>
            </div>
            <div class="modal-body">
                <label class="form-label">
                    이메일
                    <input v-model="email" class="form-control">
                </label>
                <label class="form-label">
                    비밀번호
                    <input v-model="password" type="password" class="form-control">
                </label>
            </div>
            <div class="modal-footer text-right">
                <button class="btn modal-default-button" @click="savePost()">
                    로그인
                </button>
            </div>
        </modal>
    </template>

    <div id="app">
        <header>
            <div class="header-top">
                <menu>
                	<li><a href="#;" @click="showLoginModal = true">로그인</a></li>
                	<li><a href="#;" @click="showRegisterModal = true">회원가입</a></li>

                    <!-- modal -->
                    <new-register-modal :show="showRegisterModal" @close="showRegisterModal = false"></new-register-modal>
                    <new-login-modal :show="showLoginModal" @close="showLoginModal = false"></new-login-modal>
                </menu>
            </div>

            <div class="header top-border">
                    <li><a href="/">LOGO</a></li>
                    <li><a href="#menu1">Menu 1</a></li>
                    <li><a href="#menu2">Menu 2</a></li>
                    <li><a href="#menu3">Menu 3</a></li>
                    <li><a href="#menu4">Menu 4</a></li>
            </div>
        </header>

        @yield('content')

        <footer>
            <div></div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    @yield('script')
</body>
</html>
