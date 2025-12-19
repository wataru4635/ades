"use strict";

document.addEventListener("DOMContentLoaded", function () {
  /* ===============================================
  # MVのスライダー
  =============================================== */
  const mv_swiper = new Swiper(".js-mv-swiper", {
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
  const createWorksSwiper = function (selector) {
    let reverseDirection = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
    return new Swiper(selector, {
      loop: true,
      speed: 12000,
      allowTouchMove: false,
      spaceBetween: 10,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
        ...(reverseDirection && {
          reverseDirection: true
        })
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
  };
  const slider = createWorksSwiper('.js-works-swiper', true);
  const slider2 = createWorksSwiper('.js-works-swiper02');

  /* ===============================================
  # テキストをspanで囲み、
  =============================================== */
  function wrapTextInSpans(selector) {
    const elements = document.querySelectorAll(selector);
    elements.forEach((element, elementIndex) => {
      const text = element.textContent;
      element.textContent = ''; // 元のテキストをクリア
      element.style.setProperty('--delay', elementIndex * 0.3 + 's'); // 要素ごとの遅延

      [...text].forEach((char, index) => {
        const span = document.createElement('span');
        span.textContent = char;
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
    const mv = document.querySelector('.mv');
    if (mv) {
      const mvHeight = mv.offsetHeight;
      document.documentElement.style.setProperty('--mv-height', `${mvHeight}px`);
    }
  }

  // 初回設定
  updateMVHeight();

  // ウィンドウリサイズ時にも更新
  window.addEventListener('resize', updateMVHeight);
});
document.addEventListener("DOMContentLoaded", () => {
  const stickyAbout = document.querySelector(".about"); // aboutセクションのクラスを指定
  if (!stickyAbout) return;
  const adjustStickyTop = () => {
    const windowHeight = window.innerHeight;
    const aboutHeight = stickyAbout.offsetHeight;
    if (aboutHeight > windowHeight) {
      // 画面の高さを超える場合、余分な部分を引いてtopを調整
      stickyAbout.style.top = `${windowHeight - aboutHeight}px`;
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
  const aboutLinks = document.querySelectorAll('a[href="#about"]');
  aboutLinks.forEach(link => {
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
      setTimeout(() => {
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