<?php
  $copywriting_packages_title = 'copywriting_packages_title';
  $copywriting_packages_blocks = 'copywriting_packages_blocks';
?>
<div class="packages__copywriting" id="packages__copywriting">
  <?php if( get_field($copywriting_packages_title, 947) ): ?>
    <h2 class="copywriting__title section_title">
      <?php the_field($copywriting_packages_title, 947); ?>
    </h2>
  <?php endif; ?>

  <div class="copywriting__blocks_copywriting">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if( have_rows($copywriting_packages_blocks, 947) ): ?>
        <?php while( have_rows($copywriting_packages_blocks, 947) ): the_row();
          $violet = 'violet';
          $image = 'image';
          $title = 'title';
          $price = 'price';
          $link = 'link';
          $list = 'list';
          $violet_icon = 'violet_icon';
        ?>
          <div class="<?php echo get_sub_field($violet) ? 'copywriting__block_copywriting violet' : 'copywriting__block_copywriting'; ?>" >
            <?php if (get_sub_field($title)) : ?>
              <h3 class="block_price__name_package section_title">
                <?php the_sub_field($title) ?>
              </h3>
            <?php endif; ?>

            <?php if (get_sub_field($price)) : ?>
              <span class="block_copywriting__sum">
                <?php the_sub_field($price) ?>
              </span>
            <?php endif;
              
            if (get_sub_field($violet_icon)):
              if( have_rows($list) ): ?>
                <ul class="block_copywriting__list">
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
                <ul class="block_copywriting__list">
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
              <button class="block_copywriting__btn button_violet show_form_packages"><?php echo esc_html( $link_title ); ?></button>
            <?php endif; ?>
          </div>
        <?php endwhile;?>
      <?php endif;?>
    <?php endwhile;?>
  </div>
</div>