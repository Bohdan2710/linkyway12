<?php
  $about_result_image = 'about_result_image';
?>
<section class="about__result">
  <div class="result__container container">
    <div class="result__list">
      <ul>
        <?php if (have_rows("about_result_block")) : ?>
          <?php while (have_rows("about_result_block")) : the_row(); 
            $sum = 'sum';
            $title = 'title';
            $text = 'text';
          ?>
            <li>
              <?php if (get_sub_field($sum)) : ?>
                <span class="result__list_sum section_title">
                  <?php the_sub_field($sum)?>+
                </span>
              <?php endif; ?>
              <div class="result__list_wrap">
                <?php if (get_sub_field($title)) : ?>
                  <span class="result__list_title section_title">
                    <?php the_sub_field($title) ?>
                  </span>
                <?php endif; ?>
                <?php if (get_sub_field($text)) : ?>
                  <span class="result__list_text">
                    <?php the_sub_field($text) ?>
                  </span>
                <?php endif; ?>
              </div>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
    <div class="result__img">
      <?php $image = get_field($about_result_image);
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>