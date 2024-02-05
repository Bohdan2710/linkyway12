<?php
  $management_title = 'management_title';
  $management_text = 'management_text';
  $management_link_calculate = 'management_link_calculate';
  $management_link_order = 'management_link_order';
  $management_image = 'management_image';
?>
<seciton class="services__hero_services">
  <div class="hero_services__container container">
    <div class="hero_services__wrap">
      <div class="hero_services__content">
        <?php if( get_field($management_title) ): ?>
          <h1 class="hero_services__title section_title">
            <?php the_field($management_title); ?>
          </h1>
        <?php endif; ?>

        <?php if (have_rows($management_text)) : ?>
          <?php while (have_rows($management_text)) : the_row(); 
            $text = 'text';
          ?>
              <?php if (get_sub_field($text)) : ?>
                <p class="hero_services__text">
                  <?php the_sub_field($text) ?>
                </p>
              <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <div class="hero_services__wrap_buttons">
          <?php 
          $link = get_field($management_link_order);
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a class="button_black show_form_packages" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        </div>
      </div>
      <div class="hero_services__img">
        <?php $image = get_field($management_image);
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</seciton>