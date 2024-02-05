<?php
$outrech_quality_image = 'outrech_quality_image';
$outrech_quality_title = 'outrech_quality_title';
$outrech_quality_text = 'outrech_quality_text';
?>
<section class="services__quality">
  <div class="quality__container container">
    <div class="quality__wrap">
      <div class="quality__content">
      <?php if( get_field($outrech_quality_title) ): ?>
        <h2 class="quality__title section_title">
          <?php the_field($outrech_quality_title); ?>
        </h2>
      <?php endif; ?>
      <?php if( get_field($outrech_quality_text) ): ?>
        <p class="quality__text text_grey">
          <?php the_field($outrech_quality_text); ?>
        </p>
      <?php endif; ?>
    </div>
    <div class="quality__img">
      <?php $image = get_field($outrech_quality_image);
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>