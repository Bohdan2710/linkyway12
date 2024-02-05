<?php
  $outrech_calculator_title = 'outrech_calculator_title';
?>
<section class="main__packages">
  <div class="container">
    <?php if( get_field($outrech_calculator_title, 583) ): ?>
      <h2 class="packages__title section_title">
        <?php the_field($outrech_calculator_title, 583); ?>
      </h2>
    <?php endif; ?>
    <div class="packages__wrap">
      <div class="packages__wrap_price">
        <?php get_template_part( 'templates/outrech-calculator'); ?>
        <?php get_template_part( 'templates/crowd-packages'); ?>
        <?php get_template_part( 'templates/complex-link-building'); ?>
        <div class="swiper packages__wrap_buttons">
          <div class="swiper-button-prev services__button">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/button_slider.svg" alt="img-button">
          </div>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <button class="button_black outreach active">outreach</button>
            </div>
            <div class="swiper-slide">
              <button class="button_black crowd">crowd</button>
            </div>
            <div class="swiper-slide">
              <button class="button_black complex">Complex Link Building</button>
            </div>
          </div>
          <div class="swiper-button-next services__button">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/button_slider.svg" alt="img-button">
          </div>
        </div>
      </div>
      <?php get_template_part( 'templates/outrech-request'); ?>
    </div>
  </div>
</section>