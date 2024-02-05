<?php
$management_pr_image = 'management_pr_image';
$management_pr_title = 'management_pr_title';
$management_pr_text = 'management_pr_text';
$management_pr_list = 'management_pr_list';
?>
<section class="services__pr">
  <div class="pr__container container">
    <div class="pr__wrap">
      <div class="pr__img">
      <?php $image = get_field($management_pr_image);
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        <?php endif; ?>
      </div>
      <div class="pr__content">
        <?php if( get_field($management_pr_title) ): ?>
          <h2 class="pr__title section_title">
            <?php the_field($management_pr_title); ?>
          </h2>
        <?php endif; ?>
        <?php if( get_field($management_pr_text) ): ?>
          <p class="pr__text text_grey">
            <?php the_field($management_pr_text); ?>
          </p>
        <?php endif; ?>
        <ul class="process__list text_grey">

        <?php if (have_rows($management_pr_list)) : ?>
          <?php while (have_rows($management_pr_list)) : the_row(); 
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
    </div>
  </div>
</section>