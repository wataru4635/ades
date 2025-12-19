"use strict";

/* ===============================================
# ヘッダー、ハンバーガーメニュー
=============================================== */
document.addEventListener("DOMContentLoaded", () => {
  // 定数
  const OPEN_CLASS = "is-open";

  // DOMの取得
  const hamburger = document.querySelector(".js-hamburger");
  const drawer = document.querySelector(".js-drawer");
  const header = document.querySelector(".js-header"); // ヘッダー要素を取得
  const mediaQuery = window.matchMedia("(min-width: 768px)");

  // ドロワーメニューを開く
  function openDrawer() {
    document.body.classList.add(OPEN_CLASS);
    drawer.classList.add(OPEN_CLASS);
    hamburger.classList.add(OPEN_CLASS);
    if (header) header.classList.add(OPEN_CLASS); // js-headerにもクラスを追加
  }

  // ドロワーメニューを閉じる
  function closeDrawer() {
    if (!document.body.classList.contains(OPEN_CLASS)) return;
    document.body.classList.remove(OPEN_CLASS);
    drawer.classList.remove(OPEN_CLASS);
    hamburger.classList.remove(OPEN_CLASS);
    if (header) header.classList.remove(OPEN_CLASS); // js-headerのクラスを削除
  }

  // ハンバーガーメニューのクリックイベント
  function toggleDrawer(event) {
    event.preventDefault();
    document.body.classList.toggle(OPEN_CLASS);
    drawer.classList.toggle(OPEN_CLASS);
    hamburger.classList.toggle(OPEN_CLASS);
    if (header) header.classList.toggle(OPEN_CLASS); // js-headerのクラスをトグル
  }

  hamburger.addEventListener("click", toggleDrawer);

  // ドロワーメニュー内のリンクをクリックしたら閉じる（イベントデリゲーション）
  drawer.addEventListener("click", event => {
    if (event.target.matches("a[href]")) {
      setTimeout(closeDrawer, 100); // 遷移後に閉じる
    }
  });

  // リサイズイベントの最適化
  let resizeTimeout;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      if (mediaQuery.matches) {
        closeDrawer();
      }
    }, 150);
  });

  // メディアクエリ変更時の対応
  mediaQuery.addEventListener("change", () => {
    if (mediaQuery.matches) {
      closeDrawer();
    }
  });
});

/* ===============================================
# スクロールアニメーション
// =============================================== */
function observeElements(selector) {
  let activeClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "is-active";
  const elements = document.querySelectorAll(selector);
  function handleIntersect(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add(activeClass);
        observer.unobserve(entry.target);
      }
    });
  }
  const observer = new IntersectionObserver(handleIntersect);
  elements.forEach(element => observer.observe(element));
}

// 使い方例
observeElements(".js-fade-in");
observeElements(".js-fade-up");
observeElements(".js-scaleImg");
observeElements(".js-title-animation");
observeElements(".js-link-btn");

/* ===============================================
# ヘッダーの高さをCSS変数に設定
=============================================== */
const setHeaderHeight = () => {
  const header = document.querySelector(".header");
  if (header) {
    document.documentElement.style.setProperty("--header-height", `${header.offsetHeight}px`);
  }
};

// 即座に実行（DOMContentLoadedを待たない）
setHeaderHeight();

// DOMContentLoaded後にも実行（確実に取得するため）
document.addEventListener("DOMContentLoaded", setHeaderHeight);

// ウィンドウリサイズ時に更新
window.addEventListener("resize", setHeaderHeight);