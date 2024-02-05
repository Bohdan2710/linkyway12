<?php
  $about_hero_title = 'about_hero_title';
  $about_hero_text = 'about_hero_text';
  $about_hero_image = 'about_hero_image';
?>
<section class="about__hero_about">
  <div class="hero_about__container container">
    <div class="hero_about__content">
      <?php if( get_field($about_hero_title) ): ?>
        <h2 class="hero_about__title section_title">
          <?php the_field($about_hero_title); ?>
        </h2>
      <?php endif; ?>
      <?php if( get_field($about_hero_text) ): ?>
          <p class="hero_about__text">
            <?php the_field($about_hero_text); ?>
          </p>
      <?php endif; ?>
    </div>
    <div class="hero_about__img">
      <?php $image = get_field($about_hero_image);
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>