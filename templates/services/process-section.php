
<?php
$outrech_process_image = 'outrech_process_image';
$outrech_process_title = 'outrech_process_title';
$outrech_process_text = 'outrech_process_text';
$outrech_process_link = 'outrech_process_link';
?>
<section class="services__process">
  <div class="process__container container">
    <div class="process__wrap">
      <div class="process__content">
      <?php if( get_field($outrech_process_title) ): ?>
        <h2 class="process__title section_title">
          <?php the_field($outrech_process_title); ?>
        </h2>
      <?php endif; ?>
        <ul class="process__list text_grey">

        <?php if (have_rows($outrech_process_text)) : ?>
        <?php while (have_rows($outrech_process_text)) : the_row(); 
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

        <?php 
        $link = get_field($outrech_process_link);
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="process__btn button_violet show_form_niche" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
      <div class="process__img">
        <?php $image = get_field($outrech_process_image);
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>