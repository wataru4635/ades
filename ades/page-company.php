<?php
/*
Template Name: 会社案内
*/
?>
<?php get_header(); ?>

<section class="company-mv">
  <div class="company-mv__inner">
    <p class="company-mv__en-title">Company</p>
    <h1 class="company-mv__jp-title">会社案内</h1>
  </div>
</section>

<section class="overview">
  <div class="overview__inner inner">

    <!-- パンくずリスト -->
    <ul class="overview__breadcrumbs breadcrumbs">
      <li class="breadcrumbs-item">
        <a href="<?php echo home_url('/'); ?>" class="breadcrumbs-link">Top</a>
      </li>
      <li class="breadcrumbs-item breadcrumbs-item--arrow">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg" alt="矢印" width="4" height="8">
      </li>
      <li class="breadcrumbs-item">Company</li>
    </ul>

    <div class="overview__content">
      <h2 class="overview__title section-title js-title-animation">overview</h2>
      <div class="overview__list">

        <div class="overview__item overview__item--01">
          <div class="overview__img-wrap">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ADESのロゴ" width="386" height="85" loading="lazy" class="overview__img">
          </div>

          <h3 class="overview__company-name">
            株式会社 ADES<span class="overview__company-name-sub">（株式会社アデス）</span>
          </h3>

          <ul class="overview__info-list">
            <li class="overview__info-item">
              〒107-0062 東京都港区南青山5-12-3<br>
              小田急南青山マンション205
            </li>

            <li class="overview__info-item">
              資本金 3,000,000円<br>設立 2007年4月
            </li>

            <li class="overview__info-item">
              代表取締役 :篠田 晃嘉
            </li>
          </ul>
        </div>

        <div class="overview__item overview__item--02">
          <div class="overview__img-wrap">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/company/overview-logo-shinoda.webp" alt="篠田デザイン事務所のロゴ" width="300" height="120" loading="lazy" class="overview__img">
          </div>

          <h3 class="overview__company-name">
            株式会社 篠田デザイン事務所
          </h3>

          <ul class="overview__info-list">
            <li class="overview__info-item">
              〒107-0062 東京都港区南青山5-12-3<br>
              小田急南青山マンション205
            </li>

            <li class="overview__info-item">
              資本金 5,000,000円<br>
              設立 1999年7月(篠田晃嘉デザイン事務所1998年1月)
            </li>

            <li class="overview__info-item">
              代表取締役 :篠田 晃嘉
            </li>
          </ul>
        </div>

      </div>

      <div class="overview__partner">
        <span class="overview__partner-label">業務提携会社</span>
        <p class="overview__partner-text">
          株式会社福田総合研究所 <a href="https://www.fukuda-ir.jp/" class="overview__partner-link" target="_blank" rel="noopener noreferrer">https://www.fukuda-ir.jp/</a>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="access">
  <div class="access__inner inner">

    <div class="access__content">
      <div class="access__head">
        <h2 class="access__title section-title js-title-animation">Access</h2>
        <a href="https://maps.app.goo.gl/WsSdgvU58Zfi3HrTA" target="_blank" rel="noopener noreferrer" class="access__map-btn">
          <span class="access__map-btn-label">Google Map</span>
        </a>
      </div>
  
      <div class="access__map-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6300238348817!2d139.7131504!3d35.661486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b60ea94d027%3A0x47f8a3c5de863d0f!2z44ixQURFU--8iOOCouODh-OCue-8iQ!5e0!3m2!1sja!2sjp!4v1765508056885!5m2!1sja!2sjp" width="1080" height="500" loading="lazy" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade" class="access__map"></iframe>
      </div>
  
      <p class="access__note">
      東京メトロ「表参道駅」B1出口より徒歩7分
      </p>
    </div>

  </div>
</section>

<section class="clients">
  <div class="clients__inner inner">

    <h2 class="clients__title section-title js-title-animation">Our Clients</h2>

    <div class="clients__lists">

      <ul class="clients__list clients__list--01">
        <li class="clients__item">株式会社角川アスキー総合研究所</li>
        <li class="clients__item">日出株式会社</li>
        <li class="clients__item">株式会社春秋社</li>
        <li class="clients__item">ゲーテハウス株式会社</li>
        <li class="clients__item">インペリアル・エンタープライズ株式会社</li>
        <li class="clients__item">株式会社進幸一セ</li>
        <li class="clients__item">バイク王カンパニー</li>
        <li class="clients__item">株式会社村山</li>
        <li class="clients__item">日東工器株式会社</li>
        <li class="clients__item">株式会社アテック</li>
        <li class="clients__item">株式会社エピクロ・ホールディングス</li>
        <li class="clients__item">株式会社N.E.S</li>
        <li class="clients__item">株式会社RoundTable</li>
        <li class="clients__item">株式会社フラジャックス</li>
        <li class="clients__item">花冷えかびり反射財団</li>
        <li class="clients__item">株式会社藍の風</li>
        <li class="clients__item">マモデザインラボラボジャパン</li>
        <li class="clients__item">セイコータイムクリエーション株式会社</li>
      </ul>

      <ul class="clients__list clients__list--02">
        <li class="clients__item">株式会社トヨタユーゼック</li>
        <li class="clients__item">株式会社プライトイノベーション</li>
        <li class="clients__item">エイチ・ツー・オンリティリング株式会社</li>
        <li class="clients__item">株式会社エピプロ・ホールディングス</li>
        <li class="clients__item">東京西武運輸株式会社</li>
        <li class="clients__item">株式会社オーマイオン研究所</li>
        <li class="clients__item">株式会社アイヴィ・シーズ</li>
        <li class="clients__item">株式会社ダブルーダブルー</li>
        <li class="clients__item">株式会社スクウェア・エニックス・ビジネスサポート</li>
        <li class="clients__item">株式会社スコープ</li>
        <li class="clients__item">日経印刷株式会社</li>
        <li class="clients__item">常陽銀行株式会社</li>
        <li class="clients__item">小泉製作株式会社</li>
        <li class="clients__item">一般社団法人 全国幕張改善協会</li>
        <li class="clients__item">月齢会クラブ</li>
        <li class="clients__item">株式会社細田保険部</li>
        <li class="clients__item">TOPPANエディトリアルコミュニケーションズ株式会社</li>
        <li class="clients__item">株式会社サン・ブレーン</li>
      </ul>

    </div>

  </div>
</section>



<section class="contact contact--company">
  <div class="contact__inner inner">
    <div class="contact__content">
      <h2 class="contact__title section-title js-title-animation">contact</h2>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact__link js-link-btn"><span class="contact__link-text">お問い合わせ</span></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>