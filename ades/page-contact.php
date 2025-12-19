<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<section class="works-mv">
  <div class="works-mv__inner">
    <p class="works-mv__en-title">Contact</p>
    <h1 class="works-mv__jp-title">お問い合わせ</h1>
  </div>
</section>

<section class="contact-form">
  <div class="contact-form__inner inner">
    <!-- パンくずリスト -->
    <ul class="contact-form__breadcrumbs breadcrumbs">
      <li class="breadcrumbs-item">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumbs-link">Top</a>
      </li>
      <li class="breadcrumbs-item breadcrumbs-item--arrow">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/arrow.svg" alt="矢印" width="4" height="8">
      </li>
      <li class="breadcrumbs-item">Contact</li>
    </ul>
    <div class="contact-form__content">
      <p class="contact-form__text">
        adesinc. へのお仕事をご依頼の方は、こちらのフォームよりご連絡ください。また、各分野でご協力いただけるパートナー様の募集も常時実施しております。<br>得意な分野、ご経験などを記載いただきご応募いただければと思います。
      </p>
      <p class="contact-form__text">
        フォームからのご依頼後、当社よりお見積もりのご連絡をさせていただきます。<br>ぜひご連絡ください。
      </p>
      <div class="contact-form__form">
        <?php echo do_shortcode('[contact-form-7 id="0fa3ce6" title="お問い合わせ"]'); ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>