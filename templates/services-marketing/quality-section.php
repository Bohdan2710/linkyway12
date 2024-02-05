<?php
$management_quality_image = 'management_quality_image';
$management_quality_title = 'management_quality_title';
$management_quality_text = 'management_quality_text';
?>
<section class="services__quality">
  <div class="quality__container container">
    <div class="quality__wrap">
      <div class="quality__content">
      <?php if( get_field($management_quality_title) ): ?>
        <h2 class="quality__title section_title">
          <?php the_field($management_quality_title); ?>
        </h2>
      <?php endif; ?>
      <ul class="process__list text_grey">
        <?php if (have_rows($management_quality_text)) : ?>
          <?php while (have_rows($management_quality_text)) : the_row(); 
            $text = 'text';
          ?>
            <?php if (get_sub_field($text)) : ?>
              <li>
                <span class="list_number"><?php echo get_row_index(); ?></span>
                <?php the_sub_field($text) ?>
              </li>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
    <div class="quality__img">
      <?php $image = get_field($management_quality_image);
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>