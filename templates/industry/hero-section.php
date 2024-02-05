<?php
$industry_hero_title = 'industry_hero_title';
$industry_hero_text = 'industry_hero_text';
$industry_hero_link = 'industry_hero_link';
$industry_hero_image = 'industry_hero_image';
?>
<section class="industry__hero_industry">
  <div class="hero_industry__container container">
    <div class="hero_industry__content">
      <?php if( get_field($industry_hero_title) ): ?>
        <h2 class="hero_industry__title section_title">
          <?php the_field($industry_hero_title); ?>
        </h2>
      <?php endif; ?>
      <?php if( get_field($industry_hero_text) ): ?>
        <p class="hero_industry__text">
          <?php the_field($industry_hero_text); ?>
        </p>
      <?php endif; ?>
      <?php $link = get_field($industry_hero_link);
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
          <a class="hero_industry__btn button_violet show_form_niche" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
    </div>
    <div class="hero_industry__img">
      <?php $image = get_field($industry_hero_image);
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>