<?php
  $outrech_calculator_request_image = 'outrech_calculator_request_image';
  $outrech_calculator_request_title = 'outrech_calculator_request_title';
  $outrech_calculator_request_text = 'outrech_calculator_request_text';
  $outrech_calculator_request_link = 'outrech_calculator_request_link';
?>
<div class="packages__request_packages">
  <div class="request_packages__img">
    <?php $image = get_field($outrech_calculator_request_image, 583);
      if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
    <?php endif; ?>
  </div>
  <span class="request_packages__title">
    <?php if( get_field($outrech_calculator_request_title, 583) ): ?>
      <span>
        <?php the_field($outrech_calculator_request_title, 583); ?>
      </span>
    <?php endif; ?>
  </span>
  <span class="request_packages__sum"></span>
    <?php if( get_field($outrech_calculator_request_text, 583) ): ?>
      <span class="request_packages__text text_grey">
        <?php the_field($outrech_calculator_request_text, 583); ?>
      </span>
    <?php endif; ?>
    <?php $link = get_field($outrech_calculator_request_link, 583);
      if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <a class="request_packages__button button_violet show_form_packages" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
</div>