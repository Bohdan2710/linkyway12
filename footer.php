<?php
  $footer_social_link = 'footer_social_link';
?>
<footer class="footer">
    <div class="footer__wrap padding_bottom">
      <div class="footer__container container">
        <div class="footer__wrap_content">
          <div class="footer__logo">
            <?php dynamic_sidebar( 'logo_footer' ); ?>
          </div>
          <div class="footer__review_footer">
            <div class="review_footer__link">
              <?php dynamic_sidebar( 'first_link' ); ?>
            </div>
            <div class="review_footer__link">
              <?php dynamic_sidebar( 'second_link' ); ?>
            </div>
          </div>
        </div>

        <nav class="footer__nav_pages">
          <?php dynamic_sidebar( 'footer_area_2' ); ?>
        </nav>
      </div>
    </div>
    <div class="footer__wrap border_top_bottom">
      <div class="footer__container container">
        <div class="footer__social">
          <?php if (have_rows($footer_social_link, 409)) : ?>
            <?php while (have_rows($footer_social_link, 409)) : the_row(); 
              $image = 'image';
              $link = 'link';
            ?>
              <?php 
              $link = get_sub_field($link);
              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <?php echo esc_html( $link_title ); ?>
                    <?php if( !empty(get_sub_field($image)) ): ?>
                        <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
                    <?php endif; ?>
                  </a>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <nav class="footer__nav_policy">
          <?php dynamic_sidebar( 'footer_area_3' ); ?>
        </nav>
      </div>
    </div>
    <div class="footer__copyright">
      <div class="container">
        <?php dynamic_sidebar( 'copyright' ); ?>
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>