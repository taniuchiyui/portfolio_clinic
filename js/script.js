//375px以下のviewport設定
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value = window.outerWidth > 375 ? "width=device-width,initial-scale=1" : "width=375";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();

//topに戻るボタン------------------------------
$(function () {
  var pagetop = $("#page-top");
  pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $("body, html").animate({ scrollTop: 0 }, 500);
    return false;
  });
});
// -----------------------------------



//headerナビゲーション(pc)のカレントページクラス名つけ外し
$(function () {
  $("#g-nav-pc a").each(function () {
    if (this.href == location.href) {
      $(this).parents("li").addClass("current");
    }
  });
});

//headerハンバーガーメニュー(tab,sp)のクラス名つけ外し
$(".l-header__openbtn").click(function () {
  $(this).toggleClass("active");
  $("#g-nav-hamburger").toggleClass("panelactive"); //ナビゲーションにpanelactiveクラスを付与
});


//mv-swiper
const swiper1 = new Swiper(".p-index-mv__swiper", {
  //名前を変える
  loop: true, //最後→最初に戻るループ再生を有効に
  autoplay: {
    delay: 4000, //何秒ごとにスライドを動かすか
    stopOnLastSlide: false, //最後のスライドで自動再生を終了させるか
    disableOnInteraction: false, //ユーザーの操作時に止める
    reverseDirection: false, //自動再生を逆向きにする
  },
  speed: 1000, //表示切り替えのスピード
  effect: "fade", //切り替えのmotion (※1)
  fadeEffect: {
    crossFade: true,
  },
  centeredSlides: true, //中央寄せ
  // If we need pagination
  pagination: {
    el: ".swiper-pagination", //paginationのclass
    clickable: true, //クリックでの切り替えを有効に
    // type: "bullet", //paginationのタイプ (※2)
  },
  navigation: {
    prevEl: ".swiper-button-prev", //戻るボタンのclass
    nextEl: ".swiper-button-next", //進むボタンのclass
  },
  allowTouchMove: false, // スワイプで表示の切り替えを無効に
  slidesPerView: 1, // 一度に表示する枚数
});

//p-medical-nav ページ内リンク スムーススクロール
$(window).on("load resize", function () {
  var breakpoint = 768; //ブレイクポイント設定
  var browseWid = $(window).width(); //ブラウザの横幅取得
  var widPc = browseWid > breakpoint; //PC表示のとき
  var widSp = browseWid <= breakpoint; //SP表示のとき

  $(document).on("click", "a[href^='#']", function () {
    var headerHeight = 0; // ヘッダーの高さの初期値を設定

    if (widPc) {
      headerHeight = 80; // PC表示の場合のヘッダーの高さ
    } else if (widSp) {
      headerHeight = 60; // SP表示の場合のヘッダーの高さ
    }

    var speed = 500; // ミリ秒
    var href = $(this).attr("href"); // アンカーの値取得
    var target = $(href == "#" || href == "" ? "html" : href); // 移動先を取得
    var position = target.offset().top - headerHeight; // 移動先を数値で取得（ここでヘッダー分の高さを引く）
    $("body,html").animate({ scrollTop: position }, speed, "swing"); // スムーススクロール
    return false;
  });
})

//別ページの特定の場所へリンク 位置調整
document.addEventListener("DOMContentLoaded", () => {
  if (location.hash) {
    const headerHeight = document.getElementById("js-header").clientHeight;
    setTimeout(() => {
      window.scrollBy(0, - headerHeight);
    },100)
  }
});




//staff-swiper
const swiper2 = new Swiper(".p-staff-swiper", {
  //名前を変える
  loop: true, //最後→最初に戻るループ再生を有効に
  autoplay: {
    delay: 0,
  },
  speed: 20000,
  allowTouchMove: false, // スワイプで表示の切り替えを無効に
  slidesPerView: 1.63, // 一度に表示する枚数
  spaceBetween: 10,
  centeredSlides: true, //中央寄せ
  breakpoints: {
    //画面幅による表示枚数と余白の指定
    767: {
      slidesPerView: 3.88,
      spaceBetween: 20,
    },
  },
});

