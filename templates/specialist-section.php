<?php
  $main_specialist_title = 'main_specialist_title';
  $main_specialist_image = 'main_specialist_image';
  $main_specialist_link = 'main_specialist_link';
  $main_specialist_avatar = 'main_specialist_avatar';
  $main_specialist_name = 'main_specialist_name';
  $main_specialist_position = 'main_specialist_position';
?>
<section class="main__specialist">
  <div class="specialist__container container">
    <?php $image = get_field($main_specialist_image, 442);
      if( !empty( $image ) ): ?>
      <div class="specialist__astronaut">
        <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
      </div>
    <?php endif; ?>

    <?php if( get_field($main_specialist_title, 442) ): ?>
      <span class="specialist__span section_title">
        <?php the_field($main_specialist_title, 442); ?>
      </span>
    <?php endif; ?>

    <div class="specialist__wrap">
      <?php 
        $link = get_field($main_specialist_link, 442);
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <a class="specialist__button button_white show_form_packages" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/phone.svg" alt="img-phone">
          <?php echo esc_html( $link_title ); ?>
        </a>
      <?php endif; ?>
      <div class="specialist__info_specialist">
        <?php $image = get_field($main_specialist_avatar, 442);
          if( !empty( $image ) ): ?>
            <div class="info_specialist__img">
              <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
            </div>
        <?php endif; ?>
        <div class="info_specialist__wrap">
          <?php if( get_field($main_specialist_name, 442) ): ?>
            <span class="info_specialist__name">
              <?php the_field($main_specialist_name, 442); ?>
            </span>
          <?php endif; ?>
          <?php if( get_field($main_specialist_position, 442) ): ?>
            <span class="info_specialist__position text_grey">
              <?php the_field($main_specialist_position, 442); ?>
            </span>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>