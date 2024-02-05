<?php
  $main_working_title = 'main_working_title';

  $main_working_block_1_title = 'main_working_block_1_title';
  $main_working_block_1_text = 'main_working_block_1_text';

  $main_working_img_1 = 'main_working_img_1';

  $main_working_block_2_title = 'main_working_block_2_title';
  $main_working_block_2_text = 'main_working_block_2_text';

  $main_working_img_2 = 'main_working_img_2';

  $main_working_block_3_title = 'main_working_block_3_title';
  $main_working_block_3_text = 'main_working_block_3_text';

  $main_working_img_3 = 'main_working_img_3';
?>
<section class="main__working">
  <div class="container">
    <?php if( get_field($main_working_title) ): ?>
      <h2 class="working__title section_title">
        <?php the_field($main_working_title); ?>
      </h2>
    <?php endif; ?>
    <div class="working__wrap">
      <div class="working__block_working">
        <div class="block_working__text">
        <?php if( get_field($main_working_block_1_title) ): ?>
          <h3>
            <?php the_field($main_working_block_1_title); ?>
          </h3>
        <?php endif; ?>
        <?php if( get_field($main_working_block_1_text) ): ?>
          <p class="text_grey">
            <?php the_field($main_working_block_1_text); ?>
          </p>
        <?php endif; ?>
        </div>
        <div class="block_working__img first scale">
          <?php $image = get_field($main_working_img_1);
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
          <?php endif; ?>
        </div>
        <div class="block_working__text">
          <?php if( get_field($main_working_block_2_title) ): ?>
            <h3>
              <?php the_field($main_working_block_2_title); ?>
            </h3>
          <?php endif; ?>
          <?php if( get_field($main_working_block_2_text) ): ?>
            <p class="text_grey">
              <?php the_field($main_working_block_2_text); ?>
            </p>
          <?php endif; ?>
        </div>
      </div>
      <div class="block_working__steps_working">
        <div class="steps_working__number">1</div>
        <div class="steps_working__line first"></div>
        <div class="steps_working__number">2</div>
        <div class="steps_working__line second"></div>
        <div class="steps_working__number">3</div>
      </div>
      <div class="working__block_working">
        <div class="block_working__img second">
          <?php $image = get_field($main_working_img_2);
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
          <?php endif; ?>
        </div>
        <div class="block_working__text flex">
          <?php if( get_field($main_working_block_3_title) ): ?>
            <h3>
              <?php the_field($main_working_block_3_title); ?>
            </h3>
          <?php endif; ?>
          <?php if( get_field($main_working_block_3_text) ): ?>
            <p class="text_grey">
              <?php the_field($main_working_block_3_text); ?>
            </p>
          <?php endif; ?>
        </div>
        <div class="block_working__img third">
          <?php $image = get_field($main_working_img_3);
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>