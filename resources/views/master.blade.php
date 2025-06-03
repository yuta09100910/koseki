<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>koseki</title>
    @vite('resources/css/app.css') {{-- CSSの読み込み --}}
</head>
<body>
    <div class="login_inner" >
        <form action="{{ route('kanri') }}">
            @csrf
            <label>ID: <input type="text" name="name"></label><br>
            <label>Password: <input type="password" name="password"></label><br>
            <input type="submit" value="ログイン">
            <img src="{{ asset('img/logo.png') }}" alt="ロゴ">
        </form>
    </div>
<!-- jQuery読み込み -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- 自作スクリプト -->
        <script src="{{ asset('js/script.js') }}"></script>
<!--J.Map-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCkGUl4KA8CekEkk0OOVoETJzyHmAnKE0&callback=initMap" async defer></script>
</body>
</html>