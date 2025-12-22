"use strict";

document.addEventListener("DOMContentLoaded", function () {
  /* ===============================================
  # MVのスライダー
  =============================================== */
  const mv_swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    parallax: true,
    allowTouchMove: false,
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
  createWorksSwiper('.js-works-swiper', true);
  createWorksSwiper('.js-works-swiper02');

  /* ===============================================
  # テキストをspanで囲み
  =============================================== */
  function wrapTextInSpans(selector) {
    const elements = document.querySelectorAll(selector);
    elements.forEach((element, elementIndex) => {
      element.style.setProperty('--delay', elementIndex * 0.3 + 's');

      // テキストノードを処理してspanで囲む
      const processNode = function (node) {
        let charIndex = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {
          value: 0
        };
        if (node.nodeType === Node.TEXT_NODE) {
          const text = node.textContent;
          const fragment = document.createDocumentFragment();
          [...text].forEach(char => {
            const span = document.createElement('span');
            span.textContent = char;
            span.style.setProperty('--index', charIndex.value);

            // 最初の要素（elementIndex === 0）内の特定のインデックス（5,6,7）にtext-dotsクラスを追加
            if (elementIndex === 0 && (charIndex.value === 5 || charIndex.value === 6 || charIndex.value === 7)) {
              span.classList.add('text-dots');
            }
            fragment.appendChild(span);
            charIndex.value++;
          });
          node.parentNode.replaceChild(fragment, node);
        } else if (node.nodeType === Node.ELEMENT_NODE) {
          if (node.classList.contains('text-dots')) {
            const text = node.textContent;
            const textNode = document.createTextNode(text);
            node.parentNode.replaceChild(textNode, node);
            processNode(textNode, charIndex);
          } else {
            const childNodes = Array.from(node.childNodes);
            childNodes.forEach(child => processNode(child, charIndex));
          }
        }
      };

      // 子ノードを処理
      const childNodes = Array.from(element.childNodes);
      childNodes.forEach(child => processNode(child, {
        value: 0
      }));
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
  updateMVHeight();
  window.addEventListener('resize', updateMVHeight);

  /* ===============================================
  # aboutへのリンク
  =============================================== */
  const stickyAbout = document.querySelector(".about");
  if (stickyAbout) {
    const adjustStickyTop = () => {
      const windowHeight = window.innerHeight;
      const aboutHeight = stickyAbout.offsetHeight;
      if (aboutHeight > windowHeight) {
        stickyAbout.style.top = `${windowHeight - aboutHeight}px`;
      } else {
        stickyAbout.style.top = "0";
      }
    };
    adjustStickyTop();
    window.addEventListener("resize", adjustStickyTop);
    const aboutLinks = document.querySelectorAll('a[href="#about"]');
    aboutLinks.forEach(link => {
      link.addEventListener("click", function (event) {
        event.preventDefault();
        stickyAbout.style.position = "relative";
        stickyAbout.style.top = "0";
        stickyAbout.scrollIntoView({
          behavior: "smooth"
        });
        setTimeout(() => {
          stickyAbout.style.position = "sticky";
          adjustStickyTop();
        }, 1000);
      });
    });
  }

  /* ===============================================
  # オープニングアニメーション
  =============================================== */
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
        loadingWrapper.style.transition = "opacity 1s ease";
        loadingWrapper.style.opacity = "0";
        setTimeout(function () {
          body.classList.add("animate-text");
        }, 200);
        setTimeout(function () {
          loadingWrapper.remove();
        }, 1000);
      });
    }
  } else {
    if (loadingWrapper) {
      loadingWrapper.remove();
    }
    body.classList.add("animate-text");
  }
});