<?php
  $mian_reviews_title = 'mian_reviews_title';
  $main_reviews_blocks = 'main_reviews_blocks';
?>
<section class="main__reviews" id="main__reviews">
  <div class="reviews__container container">
    <?php if( get_field($mian_reviews_title, 433) ): ?>
      <h2 class="reviews__title section_title">
        <?php the_field($mian_reviews_title, 433); ?>
      </h2>
    <?php endif; ?>
    <div class="swiper reviews__slider">
      <div class="swiper-button-prev services__button reviews__button_prev">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/button_slider.svg" alt="img-button">
      </div>
      <div class="swiper-wrapper reviews__slider_wrapper">
        <?php if (have_rows("main_reviews_blocks", 433)) : ?>
          <?php while (have_rows("main_reviews_blocks", 433)) : the_row(); 
            $image = 'image';
            $title = 'title';
            $text = 'text';
            $avatar = 'avatar';
            $name = 'name';
            $position = 'position';
            $linkedIn = 'linkedin';
          ?>
            <div class="swiper-slide">
              <div class="reviews__block_reviews">
                <div class="block_reviews__stars">
                  <?php if( !empty(get_sub_field($image)) ): ?>
                    <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <?php if (get_sub_field($text)) : ?>
                  <p class="block_reviews__text text_grey">
                    <?php the_sub_field($text) ?>
                  </p>
                <?php endif; ?>
                <div class="block_reviews__user_reviews">
                  <div class="user_reviews__avatar">
                    <?php if( !empty(get_sub_field($avatar)) ): ?>
                      <img src="<?php echo get_sub_field($avatar)['url']; ?>" alt="<?php echo get_sub_field($avatar)['alt']; ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="user_reviews__wrap">
                    <?php if (get_sub_field($name)) : ?>
                      <span class="user_reviews__name text_grey">
                        <?php the_sub_field($name) ?>
                      </span>
                    <?php endif; ?>
                    <?php if (get_sub_field($position)) : ?>
                      <span class="user_reviews__position">
                        <?php the_sub_field($position) ?>
                      </span>
                    <?php endif; ?>
                    <?php
                      $link = get_sub_field($linkedIn);
                      if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                      <span class="user_reviews__linkedIn">
                        Linkedin: <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      </span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="swiper-button-next services__button reviews__button_next">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/button_slider.svg" alt="img-button">
      </div>
      <div class="swiper-pagination reviews__progressbar"></div>
    </div>
  </div>
</section>