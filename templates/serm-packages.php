<?php
  $serm_packages_title = 'serm_packages_title';
  $serm_packages_blocks = 'serm_packages_blocks';
?>
<div class="packages__serm" id="packages__serm">
  <?php if( get_field($serm_packages_title, 968) ): ?>
    <h2 class="serm__title section_title">
      <?php the_field($serm_packages_title, 968); ?>
    </h2>
  <?php endif; ?>

  <div class="serm__blocks_serm">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if( have_rows($serm_packages_blocks, 968) ): ?>
        <?php while( have_rows($serm_packages_blocks, 968) ): the_row();
          $violet = 'violet';
          $image = 'image';
          $title = 'title';
          $price = 'price';
          $link = 'link';
          $list = 'list';
          $violet_icon = 'violet_icon';
        ?>
          <div class="<?php echo get_sub_field($violet) ? 'serm__block_serm violet' : 'serm__block_serm'; ?>" >
            <?php if (get_sub_field($title)) : ?>
              <h3 class="block_price__name_package section_title">
                <?php the_sub_field($title) ?>
              </h3>
            <?php endif; ?>

            <?php if (get_sub_field($price)) : ?>
              <span class="block_serm__sum">
                <?php the_sub_field($price) ?>
              </span>
            <?php endif;
              
            if (get_sub_field($violet_icon)):
              if( have_rows($list) ): ?>
                <ul class="block_serm__list">
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
                <ul class="block_serm__list">
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
              <button class="block_serm__btn button_violet show_form_packages"><?php echo esc_html( $link_title ); ?></button>
            <?php endif; ?>
          </div>
        <?php endwhile;?>
      <?php endif;?>
    <?php endwhile;?>
  </div>
</div>