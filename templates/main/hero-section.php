<?php
  $main_hero_title = 'main_hero_title';
  $main_hero_text = 'main_hero_text';
  $main_hero_background = 'main_hero_background';
?>
<section class="main__hero">
  <div class="hero__background">
    <?php $image = get_field($main_hero_background);
      if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
    <?php endif; ?>
  </div>
  <div class="hero__container container">
    <div class="hero__content">
      <?php if( get_field($main_hero_title) ): ?>
        <h1 class="hero__title">
          <?php the_field($main_hero_title); ?>
        </h1>
      <?php endif; ?>

      <?php if( get_field($main_hero_text) ): ?>
        <p class="hero__text">
          <?php the_field($main_hero_text); ?>
        </p>
      <?php endif; ?>
    </div>
    <?php
      get_template_part('templates/form-booking-data');
    ?>
  </div>
</section>