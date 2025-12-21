<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php if(is_page('contact')): ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <?php else: ?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <?php endif; ?>
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header js-header">
    <div class="header__inner">
      <a href="<?php echo esc_url(home_url('')); ?>" class="header__logo-wrap">
        <?php echo is_front_page() ? '<h1 class="header__logo">' : '<div class="header__logo">'; ?>
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo.webp" class="header__logo-img"
          alt="株式会社ades" width="200" height="45">
        <?php echo is_front_page() ? '</h1>' : '</div>'; ?>
        <p class="header__text">For advertising and design frontier,we will provide excellent services.</p>
      </a>
      <nav class="header__nav">
        <ul class="header__list">
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('')); ?>" class="header__item-link <?php echo is_front_page() ? 'current' : ''; ?>">
              <span class="header__item-link-text">home</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="header__item-link <?php echo is_page('about') ? 'current' : ''; ?>">
              <span class="header__item-link-text">about</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="header__item-link <?php echo is_post_type_archive('works') || is_singular('works') ? 'current' : ''; ?>">
              <span class="header__item-link-text">works</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/company/')); ?>" class="header__item-link <?php echo is_page('company') ? 'current' : ''; ?>">
              <span class="header__item-link-text">company</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="header__item-link header__item-link--contact">
              <span class="header__contact-img-wrap">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mail-icon.svg" alt="メールのアイコン"
                  width="44" height="33">
              </span>
              <span class="header__contact-text">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>
      <button class="header__hamburger js-hamburger" type="button" aria-label="メニューを開く">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <div class="header__drawer js-drawer">
    <nav class="header__drawer-nav">
      <ul class="header__drawer-items">
        <li class="header__drawer-item">
          <a href="<?php echo esc_url(home_url('')); ?>" class="header__drawer-item-link">home</a>
        </li>
        <li class="header__drawer-item">
          <a href="<?php echo esc_url(home_url('/about/')); ?>" class="header__drawer-item-link <?php echo is_page('about') ? 'current' : ''; ?>">
            about</a>
        </li>
        <li class="header__drawer-item">
          <a href="<?php echo esc_url(home_url('/works/')); ?>" class="header__drawer-item-link <?php echo is_post_type_archive('works') || is_singular('works') ? 'current' : ''; ?>">
            works</a>
        </li>
        <li class="header__drawer-item">
          <a href="<?php echo esc_url(home_url('/company/')); ?>" class="header__drawer-item-link <?php echo is_page('company') ? 'current' : ''; ?>">
            company</a>
        </li>
      </ul>
      <div class="header__drawer-info">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="header__drawer-link">
          <span class="header__drawer-link-text">お問い合わせ</span>
        </a>
      </div>
    </nav>
  </div>

  <main>