<?php 
  $cases_results_title = 'cases_results_title';
  $cases_results_links_title = 'cases_results_links_title';
  $cases_results_links = 'cases_results_links';
  $cases_results_links_images = 'cases_results_links_images';
  $cases_results_links_images_text = 'cases_results_links_images_text';
  $cases_results_images = 'cases_results_images';
?>
<section class="cases_result__result">
  <div class="container">
    <div class="result__placements">
      <div class="placements__wrap">
        <?php if( get_field($cases_results_title) ): ?>
          <h2 class="placements__title section_title">
            <?php the_field($cases_results_title); ?>
          </h2>
        <?php endif; ?>
        <?php if( get_field($cases_results_links_title) ): ?>
          <span class="placements__span section_title">
            <?php the_field($cases_results_links_title); ?>
          </span>
        <?php endif; ?>
        <div class="block_result__list_placements">
          <?php if (have_rows($cases_results_links)) : ?>
            <?php while (have_rows($cases_results_links)) : the_row(); 
              $link = 'link';
            ?>
              <ul>
                <li>
                  <?php $link = get_sub_field($link);
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                    <a class="text_grey" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>
                </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="placements__wrap">
        <div class="placements__img">
          <?php $image = get_field($cases_results_links_images);
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
            <?php endif; ?>
        </div>
        <?php if( get_field($cases_results_links_images_text) ): ?>
          <span class="placements__info result_info_text">
            <?php the_field($cases_results_links_images_text); ?>
          </span>
        <?php endif; ?>
      </div>
    </div>
    <div class="result__graphics_result">
      <div class="graphics_result__wrap">
        <?php if (have_rows($cases_results_images)) : ?>
          <?php while (have_rows($cases_results_images)) : the_row(); 
            $image = 'image';
            $whith_text = 'whith_text';
            $text = 'text';
          ?>
            <div class="graphics_result__img">
              <?php if( !empty(get_sub_field($image)) ): ?>
                  <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
              <?php endif; ?>

              <?php if (get_sub_field($whith_text)) : ?>
                <?php if (get_sub_field($text)) : ?>
                  <span class="graphics_result__info padding result_info_text">
                    <?php the_sub_field($text) ?>
                  </span>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>