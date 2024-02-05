<?php
  $management_affect_image = 'management_affect_image';
  $management_affect_title = 'management_affect_title';
  $management_affect_text = 'management_affect_text';
?>
<section class="services__affect">
  <div class="affect__container container">
    <div class="affect__wrap">
      <div class="affect__img">
        <?php $image = get_field($management_affect_image);
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        <?php endif; ?>
      </div>
      <div class="affect__content">
        <?php if( get_field($management_affect_title) ): ?>
          <h2 class="affect__title section_title">
            <?php the_field($management_affect_title); ?>
          </h2>
        <?php endif; ?>
        <?php if( get_field($management_affect_text) ): ?>
          <div class="affect__text text_grey">
            <?php the_field($management_affect_text); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>