<?php
  $main_why_title = 'main_why_title';
  $main_why_text = 'main_why_text';
  $main_why_span = 'main_why_span';

  $main_why_list_other_image = 'main_why_list_other_image';
  $main_why_list_other_title = 'main_why_list_other_title';
  $main_why_list_other = 'main_why_list_other';

  $main_why_list_we_image = 'main_why_list_we_image';
  $main_why_list_we_title = 'main_why_list_we_title';
  $main_why_list_we = 'main_why_list_we';
?>

<section class="main__why">
  <div class="why__container container">
    <div class="why__content">
      <?php if( get_field($main_why_title) ): ?>
        <h2 class="why__title section_title">
          <?php the_field($main_why_title); ?>
        </h2>
      <?php endif; ?>
      <?php if( get_field($main_why_text) ): ?>
        <p class="why__text text_grey">
          <?php the_field($main_why_text); ?>
        </p>
      <?php endif; ?>
      <?php if( get_field($main_why_span) ): ?>
        <span class="why__span">
          <?php the_field($main_why_span); ?>
        </span>
      <?php endif; ?>
    </div>
    <div class="why__wrap">
      <div class="why__other">
        <div class="other__decoration">
          <div class="other__icon">
            <?php $image = get_field($main_why_list_other_image);
                if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
            <?php endif; ?>
          </div>
          <div class="decoration__line"></div>
        </div>
        <div class="other__list">
          <?php if( get_field($main_why_list_other_title) ): ?>
            <span>
              <?php the_field($main_why_list_other_title); ?>
            </span>
          <?php endif; ?>
          <ul>
            <?php if (have_rows("main_why_list_other")) : ?>
              <?php while (have_rows("main_why_list_other")) : the_row(); 
                $text = 'text';
              ?>
                  <li>
                    <?php if (get_sub_field($text)) : ?>
                        <?php the_sub_field($text) ?>
                    <?php endif; ?>
                  </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <div class="why__we">
        <div class="we__decoration">
          <div class="we__icon">
            <?php $image = get_field($main_why_list_we_image);
              if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
            <?php endif; ?>
          </div>
          <div class="decoration__line"></div>
        </div>
        <div class="we__list">
          <?php if( get_field($main_why_list_we_title) ): ?>
            <span>
              <?php the_field($main_why_list_we_title); ?>
            </span>
          <?php endif; ?>
          <ul>
            <?php if (have_rows("main_why_list_we")) : ?>
              <?php while (have_rows("main_why_list_we")) : the_row(); 
                $text = 'text';
              ?>
                <li>
                  <?php if (get_sub_field($text)) : ?>
                      <?php the_sub_field($text) ?>
                  <?php endif; ?>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>