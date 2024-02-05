<?php
  $complex_packages_title = 'complex_packages_title';
  $complex_packages_blocks = 'complex_packages_blocks';
?>
<div class="packages__complex" id="packages__complex">
  <?php if( get_field($complex_packages_title, 804) ): ?>
    <h2 class="complex__title section_title">
      <?php the_field($complex_packages_title, 804); ?>
    </h2>
  <?php endif; ?>

  <div class="complex__blocks_complex">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if( have_rows($complex_packages_blocks, 804) ): ?>
        <?php while( have_rows($complex_packages_blocks, 804) ): the_row();
          $violet = 'violet';
          $image = 'image';
          $title = 'title';
          $price = 'price';
          $link = 'link';
          $list = 'list';
          $violet_icon = 'violet_icon';
          $how_much_links = 'how_much_links';
        ?>
          <div class="<?php echo get_sub_field($violet) ? 'complex__block_complex violet' : 'complex__block_complex'; ?>" >
            <?php if (get_sub_field($title)) : ?>
              <h3 class="block_complex__name_package section_title">
                <?php the_sub_field($title) ?>
              </h3>
            <?php endif; ?>

            <?php if (get_sub_field($price)) : ?>
              <span class="block_complex__sum">
                <?php the_sub_field($price) ?>
              </span>
            <?php endif;

            if( have_rows($how_much_links) ): ?>
              <?php while( have_rows($how_much_links) ): the_row(); 
                $text = 'text';
              ?>
                <span class="block_complex__list_title">
                  <?php the_sub_field($text); ?>
                </span>
              <?php endwhile; ?>
            <?php endif;

            if (get_sub_field($violet_icon)):
              if( have_rows($list) ): ?>
                <ul class="block_complex__list">
                  <?php while( have_rows($list) ): the_row(); 
                    $list_item = 'list_item';
                  ?>
                    <li>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/list-package-violet.svg" alt="img-icon">
                      <?php the_sub_field($list_item); ?>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif;
            else:
              if( have_rows($list) ): ?>
                <ul class="block_complex__list">
                  <?php while( have_rows($list) ): the_row(); 
                    $list_item = 'list_item';
                  ?>
                    <li>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/list-package-white.svg" alt="img-icon">
                      <?php the_sub_field($list_item); ?>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif;
            endif; ?>
            
            <?php $link = get_sub_field($link);
              if( $link ): 
                  $link_title = $link['title'];
            ?>
              <button class="block_complex__btn button_violet show_form_packages"><?php echo esc_html( $link_title ); ?></button>
            <?php endif; ?>
          </div>
        <?php endwhile;?>
      <?php endif;?>
    <?php endwhile;?>
    </div>
</div>