<?php
  $main_blocg_block = 'main_blocg_block';
  $main_blog_title = 'main_blog_title';
?>
<section class="main__latest">
  <div class="reviews__container container">
    <?php if( get_field($main_blog_title) ): ?>
      <h2 class="latest__title section_title">
        <?php the_field($main_blog_title); ?>
      </h2>
    <?php endif; ?>
    <div class="swiper latest__slider">
      <div class="swiper-button-prev services__button reviews__button_prev">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/button_slider.svg" alt="img-button">
      </div>
      <div class="swiper-wrapper latest__slider_wrapper">
        <?php if (have_rows($main_blocg_block)) : ?>
            <?php while (have_rows($main_blocg_block)) : the_row(); 
              $image = 'image';
              $date = 'date';
              $title = 'title';
              $link = 'link';
            ?>
                <div class="swiper-slide">
                  <div class="latest__block_latest">
                    <div class="block_latest__img">
                      <?php if( !empty(get_sub_field($image)) ): ?>
                          <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
                      <?php endif; ?>
                    </div>

                    <div class="block_latest__wrap">
                    <?php if( get_sub_field($date) ): ?>
                      <span class="block_latest__sub text_grey">
                        <?php the_sub_field($date); ?>
                      </span>
                    <?php endif; ?>
                    <?php if( get_sub_field($title) ): ?>
                      <span class="block_latest__title text_grey">
                        <?php the_sub_field($title); ?>
                      </span>
                    <?php endif; ?>
                      <?php 
                      $link = get_sub_field($link);
                      if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                          <a class="link_read_more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
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