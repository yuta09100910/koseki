<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>koseki</title>
    @vite('resources/css/app.css') {{-- CSSの読み込み --}}
</head>
<!--ロード画面------------------------------------------------------------------------------->
<div id="loading">
    <div id="loader"></div>
</div>
<body>
<!--共通ナビ--------------------------------------------------------------------------------->    
    <nav class="menyu">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('cours') }}">Course</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </nav>
    <a href="#" class="yoyaku">Reservation</a>
    <div class="hambarger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    @yield('content')
<!--共footer------------------------------------------------------------------------------->
    <footer>
        <div class="footer_inner">
            <img class="footer_logo" src="{{ asset('img/logo.png') }}" alt="footerロゴ">
            <dl>    
                <dt>Tel:</dt>
                <dd>028-****-***</dd>
            </dl>
        </div>
    </footer>
<!-- jQuery読み込み -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- 自作スクリプト -->
        <script src="{{ asset('js/script.js') }}"></script>
<!--J.Map-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCkGUl4KA8CekEkk0OOVoETJzyHmAnKE0&callback=initMap" async defer></script>
</body>
</html>

 
