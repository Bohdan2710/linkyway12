
<?php
$crowd_process_image = 'crowd_process_image';
$crowd_process_title = 'crowd_process_title';
$crowd_process_text = 'crowd_process_text';
$crowd_process_link = 'crowd_process_link';
?>
<section class="services__process">
  <div class="process__container container">
    <div class="process__wrap">
      <div class="process__content">
      <?php if( get_field($crowd_process_title) ): ?>
        <h2 class="process__title section_title">
          <?php the_field($crowd_process_title); ?>
        </h2>
      <?php endif; ?>
        <ul class="process__list text_grey">

        <?php if (have_rows($crowd_process_text)) : ?>
          <?php while (have_rows($crowd_process_text)) : the_row(); 
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
        $link = get_field($crowd_process_link);
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="process__btn button_violet show_form_niche" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
      <div class="process__img">
        <?php $image = get_field($crowd_process_image);
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>