<?php
$outrech_pr_image = 'outrech_pr_image';
$outrech_pr_title = 'outrech_pr_title';
$outrech_pr_text = 'outrech_pr_text';
?>
<section class="services__pr">
  <div class="pr__container container">
    <div class="pr__wrap">
      <div class="pr__img">
      <?php $image = get_field($outrech_pr_image);
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        <?php endif; ?>
      </div>
      <div class="pr__content">
        <?php if( get_field($outrech_pr_title) ): ?>
          <h2 class="pr__title section_title">
            <?php the_field($outrech_pr_title); ?>
          </h2>
        <?php endif; ?>
        <?php if( get_field($outrech_pr_text) ): ?>
          <p class="pr__text text_grey">
            <?php the_field($outrech_pr_text); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>