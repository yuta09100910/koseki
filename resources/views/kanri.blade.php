<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>koseki</title>
    @vite('resources/css/app.css') {{-- CSSの読み込み --}}
</head>
<!-- jQuery読み込み -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- 自作スクリプト -->
        <script src="{{ asset('js/script.js') }}"></script>
<!--J.Map-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCkGUl4KA8CekEkk0OOVoETJzyHmAnKE0&callback=initMap" async defer></script>
</body>
</html>