<?php
  $crowd_packages_title = 'crowd_packages_title';
  $crowd_packages_blocks = 'crowd_packages_blocks';
?>
<div class="packages__price" id="packages__price">
  <?php if( get_field($crowd_packages_title, $post->ID) ): ?>
    <h2 class="price__title section_title">
      <?php the_field($crowd_packages_title, $post->ID); ?>
    </h2>
  <?php endif; ?>

  <div class="price__blocks_price">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if( have_rows($crowd_packages_blocks, $post->ID) ): ?>
        <?php while( have_rows($crowd_packages_blocks, $post->ID) ): the_row();
          $violet = 'violet';
          $image = 'image';
          $title = 'title';
          $price = 'price';
          $link = 'link';
          $list = 'list';
          $violet_icon = 'violet_icon';
        ?>
          <div class="<?php echo get_sub_field($violet) ? 'price__block_price violet' : 'price__block_price'; ?>" >
            <?php if (get_sub_field($title)) : ?>
              <h3 class="block_price__name_package section_title">
                <?php the_sub_field($title) ?>
              </h3>
            <?php endif; ?>

            <?php if (get_sub_field($price)) : ?>
              <span class="block_price__sum">
                <?php the_sub_field($price) ?>
              </span>
            <?php endif;
              
            if (get_sub_field($violet_icon)):
              if( have_rows($list) ): ?>
                <ul class="block_price__list">
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
                <ul class="block_price__list">
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
              <button class="block_price__btn button_violet show_form_packages"><?php echo esc_html( $link_title ); ?></button>
            <?php endif; ?>
          </div>
        <?php endwhile;?>
      <?php endif;?>
    <?php endwhile;?>
  </div>
</div>