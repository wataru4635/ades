<?php get_header(); ?>

<section class="works-mv">
      <div class="works-mv__inner">
        <p class="works-mv__en-title">404 Not Found</p>
        <h1 class="works-mv__jp-title">お探しのページは存在しません</h1>
      </div>
    </section>

<section class="sub-works">
  <div class="sub-works__inner inner">
    <div class="error">
      <p class="error__text">お探しのページが見つかりませんでした。<br>申し訳ございませんが、お探しのコンテンツは移動または削除された可能性があります。<br>下記のリンクからトップページへお進みください。</p>
    </div>
    <div class="error__btn">
    <a href="<?php echo esc_url(home_url('')); ?>" class="error__btn-link">TOPへ戻る</a>
    </div>
  </div>
</section>
    <section class="contact">
      <div class="contact__inner inner">
        <div class="contact__content">
          <h2 class="contact__title section-title js-title-animation">contact</h2>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="contact__link js-link-btn"><span class="contact__link-text">お問い合わせ</span></a>
        </div>
      </div>
    </section>

<?php get_footer(); ?>