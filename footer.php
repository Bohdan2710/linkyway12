<footer class="footer">
    <div class="footer__wrap padding_bottom">
      <div class="footer__container container">
        <div class="footer__wrap_content">
          <div class="footer__logo">
            <a href="#">
              <?php dynamic_sidebar( 'footer_area_one' ); ?>
            </a>
          </div>
          <div class="footer__review_footer">
            <a href="#" class="review_footer__clutch">
              <div class="clutch__logo">
                <span class="clutch__sub">REVIEWED ON</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/footer/Clutch.png" alt="<?php echo get_template_directory_uri(); ?>/img-clutch">
              </div>
              <div class="clutch__star">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/star-clutch-footer.svg" alt="star">
                <span>9 REVIEWS</span>
              </div>
            </a>
            <a href="#" class="review_footer__fiverr">
              <div class="fiverr__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/footer/Fiverr.png" alt="<?php echo get_template_directory_uri(); ?>/img-fiverr">
              </div>
              <div class="fiverr__star">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/star-fiverr-footer.svg" alt="star">
                <span>9 REVIEWS</span>
              </div>
            </a>
          </div>
        </div>
        <div>
          <nav class="footer__nav_pages">
            <div class="nav_pages_wrap">
              <ul>
                <li><a href="#">services</a></li>
                <li><a href="#">our cases</a></li>
                <li><a href="#">price</a></li>
              </ul>
              <ul>
                <li><a href="#">reviews</a></li>
                <li><a href="#">faq</a></li>
                <li><a href="#">blog</a></li>
              </ul>
            </div>
            <div class="nav_pages_wrap">
              <ul>
                <li><a href="#">crowd marketing</a></li>
                <li><a href="#">links</a></li>
                <li><a href="#">copywriting</a></li>
              </ul>
              <ul>
                <li><a href="#">outreach</a></li>
                <li><a href="#">serm marketing</a></li>
                <li><a href="#">complex  link building</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="footer__wrap border_top_bottom">
      <div class="footer__container container">
        <div class="footer__social">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/facebook.svg" alt=""></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/linkedin.svg" alt=""></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/youtube.svg" alt=""></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/twitter.svg" alt=""></a>
        </div>
        <nav class="footer__nav_policy">
          <ul class="nav_policy_dots_mob">
            <li><a href="#">User agreement</a></li>
            <li><a href="#">Payment system</a></li>
            <li><a href="#">Service rules</a></li>
          </ul>
          <ul>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Сookie policy</a></li>
            <li><a href="#">Rules for customers</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="footer__copyright">
      <div class="container">
        <p class="footer__copyright">Copyright © 2023 Linkyway. All rights reserved.</p>
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>