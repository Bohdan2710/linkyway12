<?php
  $outrech_title = 'outrech_title';
  $outrech_text = 'outrech_text';
  $outrech_link_calculate = 'outrech_link_calculate';
  $outrech_link_order = 'outrech_link_order';
  $outrech_image = 'outrech_image';
?>
<seciton class="services__hero_services">
  <div class="hero_services__container container">
    <div class="hero_services__wrap">
      <div class="hero_services__content">
        <?php if( get_field($outrech_title) ): ?>
          <h1 class="hero_services__title section_title">
            <?php the_field($outrech_title); ?>
          </h1>
        <?php endif; ?>
        <?php if( get_field($outrech_text) ): ?>
          <p class="hero_services__text">
            <?php the_field($outrech_text); ?>
          </p>
        <?php endif; ?>
        <div class="hero_services__wrap_buttons">
          <?php 
          $link = get_field($outrech_link_calculate);
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a class="button_violet" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
          <?php 
          $link = get_field($outrech_link_order);
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a class="button_black show_form_niche" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        </div>
      </div>
      <div class="hero_services__img">
        <?php $image = get_field($outrech_image);
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</seciton>