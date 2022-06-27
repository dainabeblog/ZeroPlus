"use strict";

// scroll hint
// -----------------------------------
new ScrollHint(".js-scroll-hint", {
  i18n: {
    scrollable: "Scroll"
  }
}); // インタビュー個別記事 目次
// -----------------------------------

var indexWrap = document.querySelector('.m-single-contents-toc'); //H2タグの前に挿入したdivタグ

if (indexWrap) {
  var postContent = document.querySelector('.m-single-contents'); //記事本文が書かれているラッパー

  var hTags = postContent.querySelectorAll('h2, h3'); //記事内のH2とH3タグを全て取得

  if (hTags.length > 0) {
    var indexList = document.createElement("ul");
    var listSrc = "";
    var h3List = ""; //h3タグを取得しておくための変数

    var j = 1;
    var k = 1;

    for (var i = 0; i < hTags.length; i++) {
      var theHeading = hTags[i];
      theHeading.setAttribute('id', "index_id" + i); //リンクで飛べるようにIDをつける

      if (theHeading.tagName === 'H2') {
        if (h3List !== "") {
          listSrc += '<ul>' + h3List + '</ul>';
          h3List = "";
          k = 1;
        }

        listSrc += '</li><li><a href="#index_id' + i + '" class="js-link-move">' + '<span class="m-single-contents-toc-list-num">' + j + '.</span>' + '<span class="m-single-contents-toc-list-txt">' + theHeading.textContent + '</span>' + '</a>';
        j++;
      } else if (theHeading.tagName === 'H3') {
        h3List += '<li><a href="#index_id' + i + '" class="js-link-move">' + '<span class="m-single-contents-toc-list-num">' + (j - 1) + '.' + k + '</span>' + '<span class="m-single-contents-toc-list-txt">' + theHeading.textContent + '</span>' + '</a></li>';
        k++;
      }
    }

    if (h3List !== "") {
      listSrc += '<ul>' + h3List + '</ul></li>';
    } else {
      listSrc += '</li>';
    }

    indexList.innerHTML = listSrc;
    indexWrap.appendChild(indexList);
  }
}

$(function () {
  // top kv height
  // -----------------------------------
  topKvHeight();

  function topKvHeight() {
    var windowWidth = $(window).width(),
        windowHeight = $(window).height(),
        BreakPoint = 768;

    if (windowWidth <= BreakPoint) {
      $(".js-top-kv").outerHeight(windowHeight - 70);
    } else {
      $(".js-top-kv").outerHeight(windowHeight - 70);
    }
  }

  $(window).resize(function () {
    topKvHeight();
  }); // cta fix btn
  // -----------------------------------

  setInterval(ctaFixBtnAnimation, 6000);

  function ctaFixBtnAnimation() {
    $(".js-cta-fix-btn").addClass("is-cta-fix-btn-active").delay(300).queue(function (next) {
      $(".js-cta-fix-btn").removeClass("is-cta-fix-btn-active");
      next();
    });
  } // イベントギャラリー
  // -----------------------------------


  var lectureFirstImg = $(".event__lecture .js_event-gallery-item:eq(0) img").attr("src");
  var meetupFirstImg = $(".event__meetup .js_event-gallery-item:eq(0) img").attr("src");
  $(".js_lecture-main-img .js_event-gallery").attr("src", lectureFirstImg);
  $(".js_meetup-main-img .js_event-gallery").attr("src", meetupFirstImg);
  $(".js_event-gallery-img").on("click", function () {
    var mainGalleryImg = $(this).closest(".event__gallery").find(".js_event-gallery");
    var currentClickImg = $(this).attr("src");
    mainGalleryImg.attr("src", currentClickImg);
  }); // コース こんな人にオススメ
  // -----------------------------------

  $(".js-tab-btn").click(function () {
    //data
    var index = $(".js-tab-btn").index(this);
    var webCoursetype = $(this).data("type"); // active reset

    $(".js-tab-btn").removeClass("is-btn-active");
    $(".js-web-recommend-table").removeClass("is-recommend-table-active");
    $(".js-tab-contnets").removeClass("is-contents-active"); // table

    $(".js-web-" + webCoursetype).addClass("is-recommend-table-active"); // tab menu

    $(this).addClass("is-btn-active");
    $(".js-tab-contnets").eq(index).addClass("is-contents-active");
  }); // ホバー時画像拡大
  // -----------------------------------

  $(".js-scale-trigger").on("mouseover", function () {
    $(this).parents(".js-scale-item").find(".js-scale-elem").addClass("is-scale-up");
  }).on("mouseout", function () {
    $(this).parents(".js-scale-item").find(".js-scale-elem").removeClass("is-scale-up");
  }); // ヘッダースライド
  // -----------------------------------

  $(window).on("scroll", function () {
    $(".js-header").css("left", -$(window).scrollLeft());
  }); // スムーススクロール
  // -----------------------------------

  var headerHeight = $(".js-header").outerHeight(),
      urlHash = location.hash;

  if (urlHash) {
    $("body,html").stop().scrollTop(0);
    setTimeout(function () {
      var target = $(urlHash),
          position = target.offset().top - headerHeight;
      $("body,html").stop().animate({
        scrollTop: position
      }, 500);
    }, 100);
  }

  $(".js-link-move").click(function () {
    var href = $(this).attr("href"),
        target = $(href == "#" || href == "" ? "html" : href),
        position = target.offset().top - headerHeight;
    $("html, body").stop().animate({
      scrollTop: position
    }, 500, "swing");
    return false;
  }); // 特徴 ページ下部リンク
  // サムネイルホバー時、ボタンactive
  // -----------------------------------

  $(".js-feature-page-link-tmb").on("mouseover", function () {
    $(this).parents(".js-scale-item").find(".js-feature-page-link-more").addClass("is-feature-page-btn-active");
  }).on("mouseout", function () {
    $(this).parents(".js-scale-item").find(".js-feature-page-link-more").removeClass("is-feature-page-btn-active");
  }); // sp ハンバーガーメニュー
  // -----------------------------------

  $(".js-menu-trigger").on("click", function () {
    $("body").toggleClass("is-body-fixed");
    $(this).toggleClass("is-hm-btn-active");
    $(".js-menu").toggleClass("is-menu-open");
  }); // sp ハンバーガーメニュー サブメニュー開閉
  // -----------------------------------

  $(".js-hm-sub-btn").on("click", function () {
    $(this).toggleClass("is-hm-sub-list-open");
    $(".js-menu-accordion-menu").slideToggle("fast");
    return false;
  }); // sp, pc切り替え時1度のみ処理実行
  // -----------------------------------

  var deviceFlag = "";
  $(window).on("load resize", function () {
    changeDevice();
  });

  function changeDevice() {
    var windowWidth = $(window).width();

    if (windowWidth <= 768 && deviceFlag != "sp") {
      //sp
      deviceFlag = "sp";
      $(".js-hm-sub-btn").removeClass("is-hm-sub-list-open");
      $(".js-menu-accordion-menu, .js-under-menu").hide();
      $(".js-under-menu-trigger").removeClass("is-under-menu-open");
    } else if (windowWidth > 768 && deviceFlag != "pc") {
      //pc
      deviceFlag = "pc";
      $("body").removeClass("is-body-fixed");
    }
  } // pc header アコーディオン
  // -----------------------------------


  $(".js-under-menu-trigger").on("click", function () {
    $(".js-under-menu").slideToggle("fast");
    $(this).toggleClass("is-under-menu-open");
    return false;
  }); // faq アコーディオン
  // -----------------------------------

  $(".js-top-faq-question").on("click", function () {
    $(this).toggleClass("is-top-faq-icon-active").next().slideToggle("fast");
  });

  // ------------------
  // 参照元追加用スクリプト
  // ------------------
  let param_session = location.search.slice(1)
	let arr_param_session = param_session.split("&"); // 各パラメータを配列に格納
  let flag_referrer = false;
  function add_sessionStorage() {
    sessionStorage.setItem("utm_source",document.referrer);
  }
	// パラメータの数でループ
	for(let i = 0; i < arr_param_session.length; i++){
		if(arr_param_session[i]){
			let param_value_session = arr_param_session[i];// パラメータごとのテキスト
			let arr_param_session_value = param_value_session.split("=");// 各パラメータのキーと値を配列に格納
      sessionStorage.setItem(arr_param_session_value[0],arr_param_session_value[1]);//セッションストレージにパラメータの値を追加
      // utm_sourceがあれば参照元flagをtrueに変更
      if(arr_param_session_value[0] == "utm_source"){
        flag_referrer = true;
      }
      // 最後のループまでutm_sourceがなければ参照元をURLを追加
      if(i == arr_param_session.length - 1 && flag_referrer == false){
        add_sessionStorage();
      }
		} else {
      // パラメータが無く、セッションストレージに参照元がなければ追加する
      if(sessionStorage.getItem("utm_source") == null){
        add_sessionStorage();
      }
    }
	} 

  // 問い合わせへのリンクをクリックしたときにパラメータを追加
  $('a').on('click', function(e) {
    let url = $(this).attr("href");
    
    // 問い合わせページに遷移する際にパラメータを追加
    if(url.match(/schedule/)){
       //htmlデフォルトの挙動をキャンセルする
      e.preventDefault();
      // 遷移先に追加するパラメータ
      let add_param ="";

      // 遷移先にパラメータがあるかどうかの判定
      if(url.match(/\?/)){
        add_param += "&";
      } else {
        add_param += "?";
      }

      // セッションストレージのデータをパラメータに追加
      for(let i=0; i<sessionStorage.length; i++) {
        if(i == 0){
          add_param += `${sessionStorage.key(i)}=${sessionStorage.getItem(sessionStorage.key(i))}`
        } else {
          add_param += `&${sessionStorage.key(i)}=${sessionStorage.getItem(sessionStorage.key(i))}`
        }
      }
      let new_URL = url + add_param;
      document.location.href = new_URL;
    }
  });

});

