@extends('layout.app')
@section('content')
<header>
    <div class="about_cours_header_inner">
        <img src="{{asset('img/rumania-guo-li-li-shi-bo-wu-guan.jpg')}}" class="" alt="aboutヘッダー画像">
        <div class="fade_all" id="about_cours_header_inner_text">
            <span></span>
            <h1>About</h1>
        </div>
    </div>
</header>
<div class="about_chef">
    <p id="about_fade" class="fade-in"><span>オーナーシェフ紹介</span><br>
        <span>時を編み、味を紡ぐ料理人──シェフ 時任</span><br>
        <br>
        古代ローマの饗宴から未来都市の実験的ガストロノミー<br>
        「時間と空間を旅するレストラン」の扉を開くと<br>そこには一皿で時代と場所を超える料理が待っています<br>
        <br>
        オーナーシェフ時任は、世界各地を巡る旅と古今東西のレシピを蒐集する研究を通じて時間旅行を味覚で表現するスタイルを築き上げました<br><br>
        「一皿の中に、過去と未来、異国と郷土が混ざり合う奇跡を」<br>
        そんな想いを込めて今日も厨房から、時空を超える物語をお届けします</p>
    <img src="{{asset('img\23822591_m.jpg') }}">
</div>
<div class="about_Space">
    <img src="{{asset('img\neokurashikku-yang-shinointeriatesain-jia-juto-zhuang-shi.jpg')}}">
    <p id="about_second_fade" class="fade-in"><span>空間紹介</span><br><span>時がゆるやかに流れ、味覚が主役になる場所</span><br><br>
選び抜かれた高級家具と、プロのデザイナーが手がけた洗練の空間<br>
心と身体を解きほぐす、上質な個室でお迎えします<br>
<br>ここは、五感を静かに満たすための、あなただけの特別な時間</p>
</div>
@endsection