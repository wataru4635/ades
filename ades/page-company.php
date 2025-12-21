<?php
/*
Template Name: Company
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
        <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumbs-link">Top</a>
      </li>
      <li class="breadcrumbs-item breadcrumbs-item--arrow">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/arrow.svg" alt="矢印" width="4" height="8">
      </li>
      <li class="breadcrumbs-item">Company</li>
    </ul>

    <div class="overview__content">
      <div class="overview__title-wrap section-title-wrap">
        <h2 class="section-title02 js-title-animation">Overview</h2>
      </div>
      <div class="overview__list">

        <div class="overview__item overview__item--01">
          <div class="overview__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo.webp" alt="ADESのロゴ" width="386" height="85" loading="lazy" class="overview__img">
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
              代表取締役：篠田 晃嘉
            </li>
            <li class="overview__info-item">
              スタッフ ： プロデューサｰ　3名
            </li>
          </ul>
        </div>

        <div class="overview__item overview__item--02">
          <div class="overview__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/company/overview-logo-shinoda.webp" alt="篠田デザイン事務所のロゴ" width="274" height="122" loading="lazy" class="overview__img">
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
              代表取締役：篠田 晃嘉
            </li>
            <li class="overview__info-item">
              スタッフ ： デザイナー　9名
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="business-partner">
  <div class="business-partner__inner inner">
    <div class="business-partner__title-wrap section-title-wrap">
      <h2 class="section-title02 js-title-animation">Our Business Partner</h2>
    </div>
    <div class="business-partner__content">
      <div class="business-partner__company">
        <h3 class="business-partner__company-name">株式会社福田総合研究所</h3>
        <p class="business-partner__company-name-en">Fukuda Research Institute</p>
      </div>
      <div class="business-partner__services">
        <div class="business-partner__services-row">
          <a href="https://www.fukuda-ir.jp/ir" target="_blank" rel="noopener noreferrer" class="business-partner__service-item">
            <span class="business-partner__service-text">IRコンサルティング</span>
            <div class="business-partner__service-icon-wrap"><span class="business-partner__service-icon material-symbols-outlined">arrow_outward</span></div>
          </a>
          <a href="https://www.fukuda-ir.jp/management_consulting" target="_blank" rel="noopener noreferrer" class="business-partner__service-item">
            <span class="business-partner__service-text">株式上場コンサルティング</span>
            <div class="business-partner__service-icon-wrap"><span class="business-partner__service-icon material-symbols-outlined">arrow_outward</span></div>
          </a>
        </div>
        <div class="business-partner__services-row">
          <a href="https://www.fukuda-ir.jp/management_consulting" target="_blank" rel="noopener noreferrer" class="business-partner__service-item">
            <span class="business-partner__service-text">Ｍ＆Ａコンサルティング</span>
            <div class="business-partner__service-icon-wrap"><span class="business-partner__service-icon material-symbols-outlined">arrow_outward</span></div>
          </a>
          <a href="https://www.fukuda-ir.jp/management_consulting" target="_blank" rel="noopener noreferrer" class="business-partner__service-item">
            <span class="business-partner__service-text">ファイナンシャルプランニング</span>
            <div class="business-partner__service-icon-wrap"><span class="business-partner__service-icon material-symbols-outlined">arrow_outward</span></div>
          </a>
          <a href="https://www.fukuda-ir.jp/ipo" target="_blank" rel="noopener noreferrer" class="business-partner__service-item">
            <span class="business-partner__service-text">議決権行使獲得サービス</span>
            <div class="business-partner__service-icon-wrap"><span class="business-partner__service-icon material-symbols-outlined">arrow_outward</span></div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ceo-message">
  <div class="ceo-message__inner inner">
    <div class="ceo-message__title-wrap section-title-wrap">
      <h2 class="section-title02 js-title-animation">CEO Message</h2>
    </div>
    <div class="ceo-message__content">
      <div class="ceo-message__img-wrap">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/company/ceo-img.webp" alt="篠田 晃嘉さんの写真" width="400" height="520" loading="lazy" class="ceo-message__img">
      </div>
      <div class="ceo-message__text-wrap">
        <div class="ceo-message__main">
          <h3 class="ceo-message__title">企業や社会を<br>デザインの<br class="u-mobile"><span class="text-dots">チ</span><span class="text-dots">カ</span><span class="text-dots">ラ</span>で豊かに</h3>
          <p class="ceo-message__text">
            幼い頃から、工作や絵を描くことが好きでした。<br>
            実家の壁によく落書きをして、両親を困らせたものです。<br>
            小学生の頃は、マジンガーZの絵を描いて、クラスの人気者になった事もありました。<br>
            絵や工作の制作に入ると、すべてを忘れて一心に取り組んだ思い出が今も残っています。<br>
            <br>
            そんな子どもの頃の一心な思いを忘れる事なく、今日までデザインに取り組んできたおかげで、周りの皆様からご評価をいただき今があります。<br>
            <br>
            どんなに時代が変わろうともあの頃の、一心な思いを忘れずに、「企業や社会をデザインのチカラで豊かに」をテーマに、これからも取り組んで参りたいと思います。
          </p>
        </div>
        <div class="ceo-message__signature">
          <p class="ceo-message__position">株式会社ADES CEO<br>株式会社篠田デザイン事務所 CEO</p>
          <p class="ceo-message__name">篠田 晃嘉</p>
        </div>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6300238348817!2d139.7131504!3d35.661486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b60ea94d027%3A0x47f8a3c5de863d0f!2z44ixQURFU--8iOOCouODh-OCue-8iQ!5e0!3m2!1sja!2sjp!4v1766213629892!5m2!1sja!2sjp" width="1080" height="500" loading="lazy" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade" class="access__map" title="株式会社ADESの所在地"></iframe>
      </div>
      <p class="access__note">
        東京メトロ「表参道駅」B1出口より徒歩7分
      </p>
    </div>

  </div>
</section>

<section class="clients">
  <div class="clients__inner inner">

    <div class="clients__title-wrap section-title-wrap">
      <h2 class="section-title02 js-title-animation">Our Clients</h2>
    </div>
    <div class="clients__lists">
      <ul class="clients__list clients__list--01">
        <li class="clients__item">株式会社角川アスキー総合研究所</li>
        <li class="clients__item">日世株式会社</li>
        <li class="clients__item">株式会社春光社</li>
        <li class="clients__item">ゲーテハウス株式会社</li>
        <li class="clients__item">インペリアル・エンタープライズ株式会社</li>
        <li class="clients__item">株式会社三機サービス</li>
        <li class="clients__item">株式会社バイク王&カンパニー</li>
        <li class="clients__item">株式会社村山</li>
        <li class="clients__item">日東工器株式会社</li>
        <li class="clients__item">株式会社エフテック</li>
        <li class="clients__item">株式会社エンビプロ・ホールディングス</li>
        <li class="clients__item">株式会社ベニコ</li>
        <li class="clients__item">株式会社RoundTable</li>
        <li class="clients__item">株式会社フジテックス</li>
        <li class="clients__item">花小金井ひがし皮膚科</li>
        <li class="clients__item">株式会社楓の風</li>
        <li class="clients__item">マセラティクラブオブジャパン</li>
        <li class="clients__item">セイコータイムクリエーション株式会社</li>
      </ul>

      <ul class="clients__list clients__list--02">
        <li class="clients__item">株式会社トヨタユーゼック</li>
        <li class="clients__item">株式会社ブライトイノベーション</li>
        <li class="clients__item">エイチ・ツー・オーリテイリング株式会社</li>
        <li class="clients__item">東京西濃運輸株式会社</li>
        <li class="clients__item">株式会社ホーマーイオン研究所</li>
        <li class="clients__item">株式会社ファイブ・シーズ</li>
        <li class="clients__item">株式会社ダブリューダブリュー</li>
        <li class="clients__item">株式会社スクウェア・エニックス・ビジネスサポート</li>
        <li class="clients__item">株式会社スコープ</li>
        <li class="clients__item">日経印刷株式会社</li>
        <li class="clients__item">常陽銀行株式会社</li>
        <li class="clients__item">小泉製麻株式会社</li>
        <li class="clients__item">一般社団法人 全国林業改良普及協会</li>
        <li class="clients__item">月曜会クラブ</li>
        <li class="clients__item">株式会社綱町倶楽部</li>
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