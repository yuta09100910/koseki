@extends('layout.app')
@section('content')
<header>
    <!--スライドショー-->
    <div class="slide_conteiner">
        <img src="{{ asset('img/kantoruraitotefuru-erekantona-zhuang-shi-mei-weishii-shihe-wutowain-ren-gong-zhi-nengniyotte-sheng-chengsareta.jpg') }}" alt="スライド1">
        <img src="{{ asset('img/huatoaisukurimunotoffuhyusukufu.jpg') }}"alt="スライド2">
        <img src="{{ asset('img/fokukohisuhesutofuretonooishiirahiorihasuta.jpg') }}"alt="スライド3">
        <img src="{{ asset('img/teikuautohokkusutenoresutoranno-jian-kang-dena-shi-pin-pei-da.jpg') }}"alt="スライド4">
        <img src="{{ asset('img/wani-xingnominimarisuto-ye-caisarata.jpg') }}"alt="スライド5">
        <span class="logo_conteiner">
            <img src="{{ asset('img/logo.png') }}" class="logo" alt="ロゴ">
            <div class="logo_box2"></div>
            <div class="logo_box1"></div>
        </span>
    </div>
</header>
    <div class="concept">
        <div class="concept_left">
            <div class="concept_left_second_box">   
                <img class="fade-in" src="{{ asset('img/su-qingrashiiresutoranno-su-qingrashii-jie-hun-shinotefuru.jpg') }}" alt="concept画像">
                <span class="fade-in"></span>
            </div>
        </div>
        <div class="concept_center">
            <p class="fade-in" id="concept_fast_text"><span>Concept<br>「時間と空間を旅するレストラン」</span><br>
                洗練されたデザインの「空間」と<br>厳選された食材で一皿一皿を仕上げた至高の「食」を提供<br>
                お客様にご満足いただける「時間」を作り出します
            </p>
            <p class="fade-in" id="concept_second_text"><span>Space<br>「時がゆるやかに流れ<br>味覚が主役になる場所」</span><br>
                「空間」と「時間」は味覚に直接働きかけます<br>最高のおもてなし<br>ゆるやかなデザイン<br>至福の時をお過ごしください
            </p>
            <p class="fade-in" id="concept_third_text"><span>Gourme<br>「厳選された季節の味覚」</span><br>
                季節折々の厳選された食材で<br>毎日違うメニューでご提供
            </p>
            <a class="botton" href="{{ route('about') }}">About</a>
        </div>
        <div class="concept_right">
            <div class="concept_right_fast_box">
                <img class="fade-in" src="{{ asset('img/jinnokatorarika-heino-bei-jingni-she-ding.jpg') }}" alt="concept画像2">
                <span class="fade-in"></span>
            </div>
            <div class="concept_right_third_box">
                <img class="fade-in" src="{{ asset('img/oishii-liao-linokurieitifuna-pin-jiane.jpg') }}" alt="concept画像3">
                <span class="fade-in"></span>
            </div>
        </div>
    </div>
    <div class="course">
        <span></span>
        <div class="course_obi">
            <h2>Course</h2>
            <div class="course_menu_conteiner">
                <div class="course_box">
                    <h3>Casual</h3>
                    <p>前菜からメインとデザート食後のコーヒーと<br>ご満足いただける内容です</p>
                </div>
                <div class="course_box">
                    <h3>Great</h3>
                    <p>食前酒から始まり料理折々に適したアルコール<br>もしくはノンアルコールがつきます</p>
                </div>
                <div class="course_box">
                    <h3>Launch</h3>
                    <p>メインとデザートとドリンクからなる<br>シンプルなコースです</p>
                </div>
            </div>
        </div>
        <img class="course_img" src="{{asset('img/yunofuraitokurimuto-ye-cai.jpg') }}" alt="コース画像">
        <div class="course_phrase_box">
            <p >大切な日やお祝い事のご相談も承っております</p>
            <a href="{{ route('cours') }}" class="course_button">Course</a>
        </div>
    </div>
    <h2 class="gallery_text">Gallery</h2>
    <div class="slider-wrapper">
        <span></span>
  <div class="slider-track">
    <img src="{{asset('img/fokukohisuhesutofuretonooishiirahiorihasuta.jpg') }}" alt="スクロール画像1">
    <img src="{{asset('img/huatoaisukurimunotoffuhyusukufu.jpg') }}" alt="スクロール画像2">
    <img src="{{asset('img/jinnokatorarika-heino-bei-jingni-she-ding.jpg') }}" alt="スクロール画像3">
    <img src="{{asset('img/kantoruraitotefuru-erekantona-zhuang-shi-mei-weishii-shihe-wutowain-ren-gong-zhi-nengniyotte-sheng-chengsareta.jpg') }}" alt="スクロール画像4">
    <!-- 同じ画像を複製してループ対策 -->
    <img src="{{asset('img/fokukohisuhesutofuretonooishiirahiorihasuta.jpg') }}" alt="スクロール画像5">
    <img src="{{asset('img/huatoaisukurimunotoffuhyusukufu.jpg') }}" alt="スクロール画像6">
    <img src="{{asset('img/jinnokatorarika-heino-bei-jingni-she-ding.jpg') }}" alt="スクロール画像7">
    <img src="{{asset('img/kantoruraitotefuru-erekantona-zhuang-shi-mei-weishii-shihe-wutowain-ren-gong-zhi-nengniyotte-sheng-chengsareta.jpg') }}" alt="スクロール画像8">
  </div>
</div>]
<h2 class="information_top">Information</h2>
<div class="information">
    <div class="information_map">
        <span></span>
        <div id="map"></div>
    </div>
    <div class="information_text">
        <span></span>
        <div class="information_text_text">
        <dl>
            <dt>社名:</dt>
                <dd>株式会社RistoranteKoseki</dd>
            <dt>所在地:</dt>
                <dd>東京都＊＊＊＊</dd>
            <dt>設立:</dt>
                <dd>1980/01/01</dd>
            <dt>代表電話番号:</dt>
                <dd>028-****-***</dd>
        </dl>
        </div>
    </div>
</div>
@endsection
