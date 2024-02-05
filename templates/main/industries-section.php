<?php
  $main_industry_title = 'main_industry_title';
  $main_industry_text = 'main_industry_text';
  $main_block_industry_1 = 'main_block_industry_1';
  $main_industry_image = 'main_industry_image';
  $main_industry_link = 'main_industry_link';
  $main_block_industry_2 = 'main_block_industry_2';
?>
<section class="main__industries">
  <div class="container">
    <div class="industries__content">
      <?php if( get_field($main_industry_title) ): ?>
        <h2 class="industries__title section_title">
          <?php the_field($main_industry_title); ?>
        </h2>
      <?php endif; ?>
      <?php if( get_field($main_industry_text) ): ?>
        <span class="industries__text text_grey">
          <?php the_field($main_industry_text); ?>
        </span>
      <?php endif; ?>
    </div>
    <div class="industries__flex">
      <div class="industries__wrap">
        <?php if (have_rows("main_block_industry_1")) : ?>
          <?php while (have_rows("main_block_industry_1")) : the_row(); 
            $title = 'title';
            $image = 'image';
            $rotate_image = 'rotate_image';
            $position_right = 'position_right';
          ?>
          <div class="industries__block">
            <div class="industries__link">
              <?php if (get_sub_field($title)) : ?>
                <span>
                  <?php the_sub_field($title) ?>
                </span>
              <?php endif; ?>

              <div <?php if (get_sub_field($position_right) && get_sub_field($rotate_image)) echo 'class="industries__img rotate right big"'; else echo 'class="industries__img left big"'; ?>>
                <?php if( !empty(get_sub_field($image)) ): ?>
                    <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="industries__all">
        <?php $image = get_field($main_industry_image);
          if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        <?php endif; ?>

        <?php 
          $link = get_field($main_industry_link);
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class="button_white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
      <div class="industries__wrap">
        <?php if (have_rows("main_block_industry_2")) : ?>
          <?php while (have_rows("main_block_industry_2")) : the_row(); 
            $title = 'title';
            $image = 'image';
            $rotate_image = 'rotate_image';
            $position_right = 'position_right';
          ?>
          <div class="industries__block">
            <div class="industries__link">
              <?php if (get_sub_field($title)) : ?>
                <span>
                  <?php the_sub_field($title) ?>
                </span>
              <?php endif; ?>

              <div <?php if (get_sub_field($position_right)) echo 'class="industries__img right small"'; else echo 'class="industries__img left "'; ?>>
                <?php if( !empty(get_sub_field($image)) ): ?>
                    <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>