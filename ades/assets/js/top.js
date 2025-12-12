"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
document.addEventListener("DOMContentLoaded", function () {
  /* ===============================================
  # MVのスライダー
  =============================================== */
  var mv_swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    parallax: true,
    // パララックスさせる
    allowTouchMove: false,
    // マウスでのスワイプを禁止
    speed: 2000,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    }
  });

  /* ===============================================
  # worksのスライダー
  =============================================== */

  var slider = new Swiper('.js-works-swiper', {
    loop: true,
    speed: 7000,
    allowTouchMove: false,
    spaceBetween: 10,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      reverseDirection: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 3
      },
      1024: {
        slidesPerView: 4
      }
    }
  });
  var slider2 = new Swiper('.js-works-swiper02', {
    loop: true,
    speed: 7000,
    allowTouchMove: false,
    spaceBetween: 10,
    autoplay: {
      delay: 0,
      disableOnInteraction: false
    },
    breakpoints: {
      320: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 3
      },
      1024: {
        slidesPerView: 4
      }
    }
  });

  /* ===============================================
  # テキストをspanで囲み、
  =============================================== */
  function wrapTextInSpans(selector) {
    var elements = document.querySelectorAll(selector);
    elements.forEach(function (element, elementIndex) {
      var text = element.textContent;
      element.textContent = ''; // 元のテキストをクリア
      element.style.setProperty('--delay', elementIndex * 0.3 + 's'); // 要素ごとの遅延

      _toConsumableArray(text).forEach(function (_char, index) {
        var span = document.createElement('span');
        span.textContent = _char;
        span.style.setProperty('--index', index);
        element.appendChild(span);
      });
    });
  }
  wrapTextInSpans('.mv-text-animation');

  /* ===============================================
  # MVの高さを取得
  =============================================== */

  function updateMVHeight() {
    var mv = document.querySelector('.mv');
    if (mv) {
      var mvHeight = mv.offsetHeight;
      document.documentElement.style.setProperty('--mv-height', "".concat(mvHeight, "px"));
    }
  }

  // 初回設定
  updateMVHeight();

  // ウィンドウリサイズ時にも更新
  window.addEventListener('resize', updateMVHeight);
});
document.addEventListener("DOMContentLoaded", function () {
  var stickyAbout = document.querySelector(".about"); // aboutセクションのクラスを指定
  if (!stickyAbout) return;
  var adjustStickyTop = function adjustStickyTop() {
    var windowHeight = window.innerHeight;
    var aboutHeight = stickyAbout.offsetHeight;
    if (aboutHeight > windowHeight) {
      // 画面の高さを超える場合、余分な部分を引いてtopを調整
      stickyAbout.style.top = "".concat(windowHeight - aboutHeight, "px");
    } else {
      // 画面に収まる場合はデフォルトのtop 0を適用
      stickyAbout.style.top = "0";
    }
  };

  // ページ読み込み時に適用
  adjustStickyTop();

  // 画面リサイズ時にも適用
  window.addEventListener("resize", adjustStickyTop);

  /* ===============================================
  # aboutへのリンク
  =============================================== */
  var aboutLinks = document.querySelectorAll('a[href="#about"]');
  aboutLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      event.preventDefault();

      // `position: relative` に変更して sticky の影響を防ぐ
      stickyAbout.style.position = "relative";

      // `top` の値をリセット
      stickyAbout.style.top = "0";

      // スムーススクロール
      stickyAbout.scrollIntoView({
        behavior: "smooth"
      });
      setTimeout(function () {
        // スクロール完了後 `sticky` を再適用
        stickyAbout.style.position = "sticky";

        // 再計算して適切な `top` を設定
        adjustStickyTop();
      }, 1000);
    });
  });
});

/* ===============================================
# オープニングアニメーション
=============================================== */

document.addEventListener("DOMContentLoaded", function () {
  var loadingWrapper = document.getElementById("loading-wrapper");
  var lottieContainer = document.getElementById("lottie-container");
  var body = document.body;
  var loadingShownKey = "loadingShown";
  var loadingShown = sessionStorage.getItem(loadingShownKey);
  if (!loadingShown) {
    sessionStorage.setItem(loadingShownKey, "true");
    if (lottieContainer) {
      var animation = lottie.loadAnimation({
        container: lottieContainer,
        renderer: "svg",
        loop: false,
        autoplay: true,
        path: "/wp-content/themes/ades/assets/js/loading.json"
      });
      animation.addEventListener("complete", function () {
        // **ローディングフェードアウトと同時にテキストアニメーションを開始**
        loadingWrapper.style.transition = "opacity 1s ease";
        loadingWrapper.style.opacity = "0";

        // **フェードアウト開始から0.2秒後にテキストアニメーションをスタート**
        setTimeout(function () {
          body.classList.add("animate-text");
        }, 200); // ここで 0.2秒遅延

        // **フェードアウトが完了する 1秒後 にローディング要素を削除**
        setTimeout(function () {
          loadingWrapper.remove();
        }, 1000);
      });
    }
  } else {
    if (loadingWrapper) {
      loadingWrapper.remove();
    }
    // **2回目以降は即座にテキストアニメーションを適用**
    body.classList.add("animate-text");
  }
});