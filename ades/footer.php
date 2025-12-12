</main>

<footer class="footer">
  <div class="footer__inner inner">
    <div class="footer__wrap">
      <a href="<?php echo esc_url(home_url('')); ?>" class="footer__logo">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" class="footer__logo-img"
          alt="株式会社ades" width="200" height="45" loading="lazy">
      </a>
      <div class="footer__info">
        <p class="footer__info-text">株式会社ades（株式会社アデス）／ ades inc.</p>
        <p class="footer__info-text footer__info-text--address">〒107-0062 東京都港区南青山5-12-3</p>
        <p class="footer__info-text">小田急南青山マンション205</p>
        <p class="footer__info-text">
          TEL: <a href="tel:0357368000">03-5736-8000</a>／FAX 03-5467-0778
        </p>
      </div>
    </div>
    <nav class="footer__nav">
      <ul class="footer__list">
        <li class="footer__item"><a href="<?php echo esc_url(home_url('')); ?>" class="footer__item-link">home</a></li>
        <li class="footer__item">
          <a href="<?php echo is_front_page() ? '#about' : esc_url(home_url('/#about')); ?>"
            class="footer__item-link">about</a>
        </li>
        <li class="footer__item"><a href="<?php echo esc_url(home_url('/works')); ?>"
            class="footer__item-link">works</a>
        </li>
        <li class="footer__item"><a href="<?php echo esc_url(home_url('/company')); ?>"
            class="footer__item-link">company</a>
        </li>
        <li class="footer__item"><a href="<?php echo esc_url(home_url('/contact')); ?>"
            class="footer__item-link">contact</a>
        </li>
      </ul>
    </nav>
  </div>
  <small class="footer__copy">&copy; ades inc.</small>
</footer>
<?php wp_footer(); ?>
</body>

</html>