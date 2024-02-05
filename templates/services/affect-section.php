<?php
  $outrech_affect_image = 'outrech_affect_image';
  $outrech_affect_title = 'outrech_affect_title';
  $outrech_affect_text = 'outrech_affect_text';
?>
<section class="services__affect">
  <div class="affect__container container">
    <div class="affect__wrap">
      <div class="affect__img">
        <?php $image = get_field($outrech_affect_image);
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        <?php endif; ?>
      </div>
      <div class="affect__content">
        <?php if( get_field($outrech_affect_title) ): ?>
          <h2 class="affect__title section_title">
            <?php the_field($outrech_affect_title); ?>
          </h2>
        <?php endif; ?>
        <?php if( get_field($outrech_affect_text) ): ?>
          <p class="affect__text text_grey">
            <?php the_field($outrech_affect_text); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>