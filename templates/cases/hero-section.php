<?php
  $articles_main_title_post = 'articles_main_title_post';
  $articles_title_blocks_posts = 'articles_title_blocks_posts';
  $articles_link = 'articles_link';
  $articles_avatar_image = 'articles_avatar_image';
?>
<seciton class="cases__hero_cases">
  <div class="hero_cases__container container">
    <div class="hero_cases__wrap">
      <?php 
          $my_posts = get_posts( array(
            'numberposts' => 1,
            'category_name'    => "cases-main-posts",
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
            <div class="hero_cases__content">
              <?php if( get_field($articles_main_title_post, 23) ): ?>
                <h2 class="hero_cases__title section_title">
                  <?php the_field($articles_main_title_post, 23); ?>
                </h2>
              <?php endif; ?>

              <?php 
              $link = get_field($articles_link, 23);
              if( $link ): 
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="hero_cases__read link_read_more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo esc_html( $link_title ); ?><?php the_title('','', false); ?></a>
              <?php endif; ?>
              <div class="hero_cases__user">
                <div class="user__wrap">
                  <span class="user__date text_grey"><?php echo get_the_date( 'j F Y'); ?></span>
                  <div class="user__view text_grey">
                  <?php
                    if (function_exists('pvc_get_post_views')) {
                        $post_views = pvc_get_post_views(get_the_ID());
                        echo  $post_views . ' views ';
                    }
                  ?>
                  </div>
                </div>
                <div class="user__wrap">
                  <div class="user__avatar">
                    <?php $image = get_field($articles_avatar_image, 23);
                      if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="user__name"><?php the_author(); ?></div>
                </div>
              </div>
            </div>
          <?php
          }

          wp_reset_postdata();
        ?>
      <div class="hero_cases__articles">
        <?php if( get_field($articles_title_blocks_posts) ): ?>
          <h2 class="articles__title section_title">
            <?php the_field($articles_title_blocks_posts); ?>
          </h2>
        <?php endif; ?>
        <?php 
          $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => "cases_latest_article",
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
            <div class="articles__block">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="articles__title_articles section_title"><?php the_title(); ?></a>
              <span class="articles__date text_grey"><?php echo get_the_date( 'j F Y'); ?></span>
            </div>
          <?php
          }

          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</seciton>