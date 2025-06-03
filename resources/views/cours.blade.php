@extends('layout.app')
@section('content')
<header>
    <div class="about_cours_header_inner">
        <img src="{{asset('img/toffuhyufasutofutomikkusukuriruramu-roukyuuritomatofuraitohotetorukkorasaratasamontoharumesanchisunokurirukurirushita-jino-xiong-routo-xin-xianna-ye-cainohanbas.jpg')}}" class="" alt="aboutヘッダー画像">
        <div class="fade_all" id="about_cours_header_inner_text">
            <span></span>
            <h1>Cours</h1>
        </div>
    </div>
</header>
<div class="fade-in" id="cours_inner">
    <dl class="cours_text">
        <span>Casual</span>
            <dt>料金：</dt>
            <dd>￥5000</dd>
            <dt>お時間目安：</dt>
            <dd>2時間</dd>
            <dt>品目：</dt>
            <dd>5</dd>
            <dt>ドリンク：</dt>
            <dd>￥500+でお飲み物を<br>特定のアルコールに変更可</dd>
    </dl>
    <div class="cours_img">
        <img src="{{asset('img\1523195.png')}}">
        <p class="cours_img_text">
            <span>コース内容</span><br><br>
            日替わり前菜<br><br>
            お魚料理<br><br>
            お肉料理<br><br>
            デザート三種<br><br>
            ドリンク(アルコールに変更可能)
        </p>    
    </div>
</div>
<div class="fade-in" id="cours_inner">
    <dl class="cours_text">
        <span>Great</span>
            <dt>料金：</dt>
            <dd>￥12000</dd>
            <dt>お時間目安：</dt>
            <dd>3時間</dd>
            <dt>品目：</dt>
            <dd>11</dd>
            <dt>ドリンク：</dt>
            <dd>アルコールをノンアルコールに変更可</dd>
    </dl>
    <div class="cours_img">
        <img src="{{asset('img\1523195.png')}}">
        <p class="cours_img_text">
            <span>コース内容</span><br><br>
            食前酒<br><br>
            日替わり前菜 & お料理に合わせたドリンク<br><br>
            お魚料理 & お料理に合わせたドリンク<br><br>
            ソルベ<br><br>
            お肉料理 & お料理に合わせたドリンク<br><br>
            デザート三種 & お料理に合わせたドリンク<br><br>
            食後のドリンク
        </p>    
    </div>
</div>
<div class="fade-in" id="cours_inner">
    <dl class="cours_text">
        <span>Launch</span>
            <dt>料金：</dt>
            <dd>￥2500</dd>
            <dt>お時間目安：</dt>
            <dd>1時間</dd>
            <dt>品目：</dt>
            <dd>4</dd>
            <dt>ドリンク：</dt>
            <dd>￥500+でお飲み物を<br>特定のアルコールに変更可</dd>
    </dl>
    <div class="cours_img">
        <img src="{{asset('img\1523195.png')}}">
        <p class="cours_img_text">
            <span>コース内容</span><br><br>
            日替わり前菜<br><br>
            お魚料理 or お肉料理<br><br>
            デザート三種<br><br>
            ドリンク(アルコールに変更可能)<br><br>
            ※こちらのコースは<br>平日11時～15時のみのご提供となります
        </p>    
    </div>
</div>
@endsection