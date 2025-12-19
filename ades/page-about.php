<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<section class="about-mv">
  <div class="about-mv__inner">
    <p class="about-mv__en-title">About</p>
    <h1 class="about-mv__jp-title">ADESについて</h1>
  </div>
</section>

<section class="sub-about">
  <div class="sub-about__inner inner">

    <!-- パンくずリスト -->
    <ul class="sub-about__breadcrumbs breadcrumbs">
      <li class="breadcrumbs-item">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumbs-link">Top</a>
      </li>
      <li class="breadcrumbs-item breadcrumbs-item--arrow">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/arrow.svg" alt="矢印" width="4" height="8">
      </li>
      <li class="breadcrumbs-item">About</li>
    </ul>
    <div class="sub-about__content">
      <div class="sub-about__title-wrap section-title-wrap">
        <h2 class="section-title02 js-title-animation">About Us</h2>
      </div>
      <p class="sub-about__lead">
        企業や社会をデザインの<br>チカラで豊かにする会社
      </p>
      <div class="sub-about__text-wrap">
        <p class="sub-about__text">
          <span class="sub-about__text-year">１９９６</span>年<span class="sub-about__text-month">１</span>月。私たちの原点である篠田晃嘉デザイン事務所は、<br>
          <span class="sub-about__text-ls">グラフィックデザインを主体としたデザイン事務所としてスタートしました。</span><br>
          以来、個人事務所、有限会社、株式会社と変遷を重ね、<br>
          <span class="sub-about__text-year">２００７</span>年に株式会社アデスが誕生しました。
        </p>
        <p class="sub-about__text">
          創業以来、私たちが一環して大切にしているのがデザインの<span class="sub-about__text-dots">チカラ</span>です。<br>
          デザインには様々なチカラがあり、時には社会や人を動かす事も可能です。<br>
          そんなデザインに込められた確かなチカラを信じ、<br>
          豊かな社会の創造の一躍担っていきたいと考えます。
        </p>
        <p class="sub-about__text">
          私たちアデスは、企業や社会をデザインで豊かにしていきます。
        </p>
      </div>
      <div class="sub-about__logo-text-wrap">
        <p class="sub-about__logo-text">
          企業や社会を<br>デザインのチカラで豊かに
        </p>
        <div class="sub-about__logo-img-wrap">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo02.svg" alt="ades inc.のロゴマーク" width="180" height="48" loading="lazy" class="sub-about__img">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sub-about-more">
  <div class="sub-about-more__inner inner">
    <div class="sub-about-more__title-wrap section-title-wrap">
      <h2 class="section-title02 js-title-animation">and more</h2>
    </div>
    <h3 class="sub-about-more__subtitle">私たちにお任せください｡</h3>
    <div class="sub-about-more__companies">
      <div class="sub-about-more__company sub-about-more__company--ades">
        <div class="sub-about-more__img-wrap">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo02.svg" alt="株式会社アデスのロゴ" width="240" height="80" loading="lazy" class="sub-about-more__img">
        </div>
        <p class="sub-about-more__text">
          株式会社アデスは、総合広告会社としてプロデュース・企画力・ネットワーク力を駆使して、お客様の広告ビジネス全般を手伝いいたします。
        </p>
      </div>
      <span class="sub-about-more__cross"></span>
      <div class="sub-about-more__company sub-about-more__company--shinoda">
        <div class="sub-about-more__img-wrap">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-shinoda.svg" alt="株式会社篠田デザイン事務所のロゴ" width="240" height="80" loading="lazy" class="sub-about-more__img">
        </div>
        <p class="sub-about-more__text">
          株式会社篠田デザイン事務所は、プロのデザイナー集団です。様々な分野に精通したスタッフが、最適なデザインをご提供いたします。
        </p>
      </div>
    </div>
    <p class="sub-about-more__note">2つの会社のシナジーが更なる価値をご提供。</p>
  </div>
</section>

<div class="sub-about-more__spacer"></div>

<section class="contact contact--about">
  <div class="contact__inner inner">
    <div class="contact__content">
      <h2 class="contact__title section-title js-title-animation">contact</h2>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact__link js-link-btn"><span class="contact__link-text">お問い合わせ</span></a>
    </div>
  </div>
</section>
<?php get_footer(); ?>