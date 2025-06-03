    /*ロード画面-----------------------------------------------------------------------------------------*/
window.addEventListener('load', function () {
    // ロードが完了したらフェードアウトしてコンテンツ表示
    const loading = document.getElementById('loading');
    const content = document.getElementById('content');
    
    loading.classList.add('fade-out');

    setTimeout(() => {
      loading.style.display = 'none';
      content.style.display = 'block';
    }, 1000); // フェードアウト後に非表示
  });

/*ふわっとfade-in-----------------------------------------------------------------------------------*/
/*スクロールしたら中身を発動*/
$(window).on('scroll',function(){
  /*fade-inクラスが付与されてるものに対して*/
  $('.fade-in').each(function(){
    /*Windowトップから対象までの距離*/
    const elemTop = $(this).offset().top;
    /*Windowトップからどれだけスクロールしたか*/
    const scroll = $(window).scrollTop();
    /*現在表示されているWindowの高さ*/
    const windowHeight = $(window).height();
    
    /*上記を踏まえてタイミングを計算*/
    if(scroll + windowHeight > elemTop){
      $(this).addClass('show');
    }
  });
});

/*グーグルマップ読み込み関数----------------------------------------------------------------------------*/
function initMap() {
        /*緯度経度*/
        const tokyo = { lat: 35.682839, lng: 139.759455 }; // 東京駅
        /*new google.maps.Map(document.getElementById("map")はmapというIDの場所にmapを表示させるよって意味*/
        const map = new google.maps.Map(document.getElementById("map"), {
          /*東京都を中心に15倍率*/
          zoom: 15,
          center: tokyo,
        });
        /*new google.maps.Markerは対象の場所にピンを立ててねって意味*/
        const marker = new google.maps.Marker({
          /*対象はさっきのmapでピンは東京に立てる*/
          position: tokyo,
          map: map,
        });
      }


$(function(){

$('body').removeClass('preload');

/*スライドショーの画像全部読み込んでる--------------------------------------------------------------*/
 let $slide = $('.slide_conteiner img').not('.logo');/*ここでimg の中でも.logoは除外してる*/
/*スライドショーのスタート地点を0にしてる*/
 let current = 0;

 function nextslide(){
    /*eq(current)は$slideの何番目の画像をフェードアウトするか指定してる*/
    $slide.eq(current).fadeOut(3300);
    /*ここでcurrentに1を足して$slideの容量で割って余りを出す計算をしてる*/
    current = (current + 1) % $slide.length;
    /*ここで次の画像をフェードインしている*/
    $slide.eq(current).fadeIn(3300);
 }

/*ここでnextslideをトータル何秒で一週目を終わらせてループさせるか定義してる*/
setInterval(nextslide, 6000);




/*ロゴのフェードイン------------------------------------------------------------------------------------*/
$(document).ready(function() {
    /*1秒後にclass.leftを付与するだけ（フェードイン処理はCSSでしてる）*/
    setTimeout(function() {
        $('.logo_conteiner').addClass('left');
      }, 1500); // 1秒後に実行
});


/*ハンバーガーメニュー------------------------------------------------------------------------------------*/
$('.hambarger').click(function(){
  /*toggleClass()はあれば外して無ければ付与する*/
  $(this).toggleClass('activ');
  $('.menyu').toggleClass('menyu_ber');
});

})

/*あらゆるfade-in*/
$(document).ready(function() {
    setTimeout(function() {
        $('.fade_all').addClass('in');
      }, 1500);
});