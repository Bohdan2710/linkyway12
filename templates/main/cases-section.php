<?php
  $main_cases_sub_title = 'main_cases_sub_title';
  $main_cases_title = 'main_cases_title';
  $main_cases_text = 'main_cases_text';
  $main_cases_link = 'main_cases_link';

  $main_cases_list_tab_luxoft = 'main_cases_list_tab_luxoft';
  $main_cases_list_tab_kevuru = 'main_cases_list_tab_kevuru';
  $main_cases_list_tab_genstar = 'main_cases_list_tab_genstar';

  $main_cases_link_image_luxoft = 'main_cases_link_image_luxoft';
  $main_cases_link_image_kevuru = 'main_cases_link_image_kevuru';
  $main_cases_link_image_genstar = 'main_cases_link_image_genstar';
?>
<section class="main__cases">
  <div class="cases__container container">
    <div class="cases__content_cases">
      <?php if( get_field($main_cases_sub_title) ): ?>
        <span class="content_cases__sub_title">
          <?php the_field($main_cases_sub_title); ?>
        </span>
      <?php endif; ?>
      <?php if( get_field($main_cases_title) ): ?>
        <h2 class="content_cases__title section_title">
          <?php the_field($main_cases_title); ?>
        </h2>
      <?php endif; ?>
      <?php if( get_field($main_cases_text) ): ?>
        <p class="content_cases__text text_grey">
          <?php the_field($main_cases_text); ?>
        </p>
      <?php endif; ?>
      <?php 
        $link = get_field($main_cases_link);
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="content_cases__button button_violet" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
    <div class="cases__company_cases">
        <div class="company_cases__wrap_graphic tab_body" id="tab_1">
          <?php if (have_rows($main_cases_list_tab_luxoft)) : ?>
            <?php while (have_rows($main_cases_list_tab_luxoft)) : the_row();
              $image = 'image';
            ?>
              <?php if( !empty(get_sub_field($image)) ): ?>
                  <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="company_cases__wrap_graphic tab_body" id="tab_2">
          <?php if (have_rows($main_cases_list_tab_kevuru)) : ?>
            <?php while (have_rows($main_cases_list_tab_kevuru)) : the_row();
              $image = 'image';
            ?>
              <?php if( !empty(get_sub_field($image)) ): ?>
                  <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
       
        <div class="company_cases__wrap_graphic tab_body" id="tab_3">
          <?php if (have_rows($main_cases_list_tab_genstar)) : ?>
            <?php while (have_rows($main_cases_list_tab_genstar)) : the_row();
              $image = 'image';
            ?>
              <?php if( !empty(get_sub_field($image)) ): ?>
                  <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="company_cases__wrap_company">
          <a class="wrap_company__button luxoft" href="#" >
           <?php $image = get_field($main_cases_link_image_luxoft);
              if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
            <?php endif; ?>
          </a>
          <a class="wrap_company__button kevuru" href="#" >
            <?php $image = get_field($main_cases_link_image_kevuru);
              if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
            <?php endif; ?>
          </a>
          <a class="wrap_company__button genstar" href="#" >
            <?php $image = get_field($main_cases_link_image_genstar);
              if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
            <?php endif; ?>
          </a>
        </div>
    </div>
  </div>
</section>