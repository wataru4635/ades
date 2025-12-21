/* ===============================================
# ヘッダー、ハンバーガーメニュー
=============================================== */
document.addEventListener("DOMContentLoaded", () => {
  const OPEN_CLASS = "is-open";

  const hamburger = document.querySelector(".js-hamburger");
  const drawer = document.querySelector(".js-drawer");
  const header = document.querySelector(".js-header");
  const mediaQuery = window.matchMedia("(min-width: 768px)");

  function openDrawer() {
    document.body.classList.add(OPEN_CLASS);
    drawer.classList.add(OPEN_CLASS);
    hamburger.classList.add(OPEN_CLASS);
    if (header) header.classList.add(OPEN_CLASS);
  }

  function closeDrawer() {
    if (!document.body.classList.contains(OPEN_CLASS)) return;
    document.body.classList.remove(OPEN_CLASS);
    drawer.classList.remove(OPEN_CLASS);
    hamburger.classList.remove(OPEN_CLASS);
    if (header) header.classList.remove(OPEN_CLASS);
  }

  function toggleDrawer(event) {
    event.preventDefault();
    document.body.classList.toggle(OPEN_CLASS);
    drawer.classList.toggle(OPEN_CLASS);
    hamburger.classList.toggle(OPEN_CLASS);
    if (header) header.classList.toggle(OPEN_CLASS);
  }

  hamburger.addEventListener("click", toggleDrawer);

  drawer.addEventListener("click", (event) => {
    if (event.target.matches("a[href]")) {
      setTimeout(closeDrawer, 100);
    }
  });

  let resizeTimeout;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      if (mediaQuery.matches) {
        closeDrawer();
      }
    }, 150);
  });

  mediaQuery.addEventListener("change", () => {
    if (mediaQuery.matches) {
      closeDrawer();
    }
  });
});

/* ===============================================
# スクロールアニメーション
// =============================================== */
function observeElements(selector, activeClass = "is-active") {
  const elements = document.querySelectorAll(selector);

  function handleIntersect(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add(activeClass);
        observer.unobserve(entry.target);
      }
    });
  }

  const observer = new IntersectionObserver(handleIntersect);

  elements.forEach((element) => observer.observe(element));
}

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
    document.documentElement.style.setProperty(
      "--header-height",
      `${header.offsetHeight}px`
    );
  }
};

setHeaderHeight();

document.addEventListener("DOMContentLoaded", setHeaderHeight);
window.addEventListener("resize", setHeaderHeight);