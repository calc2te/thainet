@extends('_layouts.master')

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

        <div class="header top-border bottom-border">
                <li><a href="/">LOGO</a></li>
                <li><a href="#menu1">Menu 1</a></li>
                <li><a href="#menu2">Menu 2</a></li>
                <li><a href="#menu3">Menu 3</a></li>
                <li><a href="#menu4">Menu 4</a></li>
        </div>
    </header>

    <style>
        .regForm {margin:0 auto;width:520px;}
        .regForm .reg-box {padding:15px 40px;}
        .regForm .reg-box label.text {width:120px;}
        .regForm .reg-box input.input {width:220px;}
        .regForm .small-msg {padding-left:4px;color:gray;font-size:14px;}

        .btn {padding:8px 14px;background-color:#007bff;color:#fff;}
    </style>

    <div class="container">
        <form class="regForm">
            <h3 class="title">회원가입</h3>

            <div class="reg-box top-border bottom-border">
                <label class="text">이메일</label>
                <input type="text" class="input">
            </div>
            <div class="reg-box bottom-border">
                <label class="text">비밀번호</label>
                <input type="text" class="input">
            </div>
            <div class="reg-box bottom-border">
                <label class="text">비밀번호 확인</label>
                <input type="text" class="input">
            </div>
            <div class="reg-box bottom-border">
                <label class="text"></label>
                <input type="checkbox" id="agree"> <label for="agree" class="small-msg">이용약관 및 개인정보 처리방침에 동의합니다.
            </div>
            <div class="reg-box">
                <label class="text"></label>
                <input type="button" class="btn" value="가입하기">
            </div>
        </form>
    </div>
@endsection

@section('script')
@endsection
