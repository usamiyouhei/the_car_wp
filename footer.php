<footer class="footer" id="footer">
      <div class="footer__contents">
        <div class="footer__logo--items">
          <div class="footer__logo--item">
            <div class="footer__logo--wrap">
              <img
                class="footer__logo"
                src="<?php echo esc_url(get_theme_file_uri('/images/the Car Automobile-logo1.svg')); ?>"
                alt="ヘッダーロゴ"
              />
            </div>
            <div class="brand-logo">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
          <small class="footer__copyright"
            >&copy;<?php echo wp_date("Y");?>&nbsp;the&nbsp;Car&nbsp;Automobile&nbsp;all&nbsp;rights&nbsp;reserved</small
          >
        </div>
        <nav class="footer__nav--link">
          <ul class="footer__link-items">
            <li><a href="<?php echo esc_url(home_url("/")) ?>" class="footer__link-item">TOP</a></li>
            <li><a href="<?php echo esc_url(home_url("/about")) ?>" class="footer__link-item">ABOUT</a></li>
            <li><a href="<?php echo esc_url(home_url("/service")) ?>" class="footer__link-item">SERVICE</a></li>
            <li><a href="<?php echo esc_url(home_url("/works")) ?>" class="footer__link-item">WORKS</a></li>
            <li><a href="<?php echo esc_url(home_url("/news")) ?>" class="footer__link-item">NEWS</a></li>
            <li><a href="<?php echo esc_url(home_url("/contact")) ?>" class="footer__link-item">CONTACT</a></li>
            <li>
              <a href="<?php echo esc_url(home_url("/")) ?>" class="footer__link-item">プライバシーポリシー</a>
            </li>
          </ul>
        </nav>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
