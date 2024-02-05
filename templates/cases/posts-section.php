<div class="cases_posts">
  <div class="cases_posts__container container">
  <?php 
    $my_posts = get_posts( array(
      'numberposts' => -1,
      'category_name'    => "cases_posts",
      'orderby'     => 'date',
      'order'       => 'ASC',
      'include'     => array(),
      'exclude'     => array(),
      'meta_key'    => '',
      'meta_value'  =>'',
      'post_type'   => 'post',
      'suppress_filters' => true,
    ) ); 


    global $post;

    foreach( $my_posts as $post ){
      setup_postdata( $post );
    ?>
      <div class="cases_posts__cases_post">
        <div class="cases_post__img">
          <?php echo get_the_post_thumbnail( $page->ID, 'large'); ?>
        </div>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="cases_post__title section_title"><?php the_title(); ?></a>
        <div class="cases_post__text text_grey">
          <?php the_excerpt( $post ); ?>
        </div>
        <input class="cases_post__link link_read_more" type="checkbox">
        <div class="cases_post__wrap">
        <span class="cases_post__date text_grey"><?php echo get_the_date( 'j F Y'); ?></span>
          <span class="cases_post__view text_grey">
          <?php
            if (function_exists('pvc_get_post_views')) {
                $post_views = pvc_get_post_views(get_the_ID());
                echo  $post_views . ' views ';
            }
          ?>
          </span>
        </div>
        <span class="cases_post__name text_grey"><?php the_author(); ?></span>
      </div>
    <?php
    }

    wp_reset_postdata();
  ?>
  </div>
</div>