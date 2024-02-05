<?php
  $main_services_title = 'main_services_title';
  $main_services_blocks = 'main_services_blocks';
?>
<section class="main__services" id="main__services">
  <div class="services__container container">
      <?php if( get_field($main_services_title) ): ?>
        <h2 class="services__title section_title">
          <?php the_field($main_services_title); ?>
        </h2>
      <?php endif; ?>
    <div class="swiper services__slider">
      <div class="swiper-button-prev services__button">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/button_slider.svg" alt="img-button">
      </div>

      <div class="swiper-wrapper services__slider_wrapper">
        <?php if (have_rows("main_services_blocks")) : ?>
          <?php while (have_rows("main_services_blocks")) : the_row(); 
            $image = 'image';
            $title = 'title';
            $text = 'text';
            $link = 'link';
          ?>
              <div class="swiper-slide">
                <div class="services__block_services">
                  <div class="block_services__wrap_icon">
                    <?php if( !empty(get_sub_field($image)) ): ?>
                        <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
                    <?php endif; ?>
                  </div>
                  <?php if (get_sub_field($title)) : ?>
                    <h3 class="block_services__title section_title">
                      <?php the_sub_field($title) ?>
                    </h3>
                  <?php endif; ?>
                  <?php if (get_sub_field($text)) : ?>
                    <p class="block_services__text">
                      <?php the_sub_field($text) ?>
                    </p>
                  <?php endif; ?>
                  <?php 
                    $link = get_sub_field($link);
                    if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                      <a class="block_services__link link_read_more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>
                </div>
              </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="swiper-button-next services__button">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/button_slider.svg" alt="img-button">
      </div>
      <div class="swiper-pagination services__progressbar"></div>
    </div>
  </div>
</section>