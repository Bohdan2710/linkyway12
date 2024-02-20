<?php
  $industry_packages_title = 'industry_packages_title';
  $industry_packages_blocks = 'industry_packages_blocks';
  $industry_packages_blocks_demonstration = 'industry_packages_blocks_demonstration';

  $form_industry_formspree_url = 'form_industry_formspree_url';
  $form_industry_inputs = 'form_industry_inputs';
  $form_industry_textarea_placholder = 'form_industry_textarea_placholder';
  $form_industry_textarea_name = 'form_industry_textarea_name';
  $form_industry_button_send_text = 'form_industry_button_send_text';
?>
<section class="industry__packages">
  <?php if( get_field($industry_packages_title) ): ?>
    <h2 class="industry_posts__title section_title">
      <?php the_field($industry_packages_title); ?>
    </h2>
  <?php endif; ?>
  <div class="industry_posts__container container">
    <?php if (have_rows($industry_packages_blocks_demonstration)) : ?>
      <?php while (have_rows($industry_packages_blocks_demonstration)) : the_row();
        $image = 'image';
        $title = 'title';
        $text = 'text';
        $link = 'link';
      ?>
        <div class="industry_posts__industry_post">
          <div class="industry_post__img">
            <?php if( !empty(get_sub_field($image)) ): ?>
                <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
            <?php endif; ?>
          </div>
          <?php if (get_sub_field($title)) : ?>
            <h3 class="industry_post__title section_title">
              <?php the_sub_field($title) ?>
            </h3>
          <?php endif; ?>

          <?php if (get_sub_field($text)) : ?>
            <p class="industry_post__text text_grey">
              <?php the_sub_field($text) ?>
            </p>
          <?php endif; ?>
          
          <?php $link = get_sub_field($link);
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="industry_post__link link_read_more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="link_span"><?php echo esc_html( $link_title ); ?></span></a>
            <?php endif; ?>
          <form 
            class="hero__form form_industry"
            action="<?php the_field($form_industry_formspree_url); ?>"
            method="POST"
            id="form_booking_data"
          >
            <div class="form_industry__wrap industry_niche">
              <input 
                name="niche" 
                type="text" 
                value='<?php the_sub_field($title) ?>'
                class="form-control" 
                id="niche"
              >
            </div>

            <?php if (have_rows($form_industry_inputs)) : ?>
              <?php while (have_rows($form_industry_inputs)) : the_row(); 
                $placeholder = 'placeholder';
                $required = 'required';
                $select_type_for_input = 'select_type_for_input';
                $name_for_input = 'name_for_input';
              ?>

                <div class="form_industry__wrap">
                  <input 
                    placeholder="<?php the_sub_field($placeholder); ?>" 
                    name="<?php the_sub_field($name_for_input); ?>" 
                    type="<?php echo esc_html ( get_sub_field($select_type_for_input) ); ?>" 
                    class="form-control" 
                    id="user"
                    <?php 
                      if(get_sub_field($required) ) {
                        echo 'required';
                      };
                    ?>
                  >
                </div>
              <?php endwhile; ?>
            <?php endif; ?>

            <div class="form_industry__wrap">
              <textarea 
                name="<?php the_sub_field($form_industry_textarea_name); ?>" 
                placeholder="<?php the_sub_field($form_industry_textarea_placholder); ?>" 
                class="form-control"
              ></textarea>
            </div>

            <button class="button_violet" type="submit">
              <?php if( get_field($form_industry_button_send_text) ): ?>
                <?php the_field($form_industry_button_send_text); ?>
              <?php endif; ?>
            </button>
            
          </form>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <div class="industry_posts_modal">
      <div class="industry_posts__container modal">
        <div class="modal_title">
          <?php if( get_field($industry_packages_title) ): ?>
            <h2 class="industry_posts__title section_title">
              <?php the_field($industry_packages_title); ?>
            </h2>
          <?php endif; ?>
        </div>
        <?php if (have_rows($industry_packages_blocks)) : ?>
          <?php while (have_rows($industry_packages_blocks)) : the_row(); 
            $image = 'image';
            $title = 'title';
            $text = 'text';
            $link = 'link';
          ?>
            <div class="industry_posts__industry_post">
              <div class="industry_post__img">
                <?php if( !empty(get_sub_field($image)) ): ?>
                    <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
                <?php endif; ?>
              </div>
              <?php if (get_sub_field($title)) : ?>
                <h3 class="industry_post__title section_title">
                  <?php the_sub_field($title) ?>
                </h3>
              <?php endif; ?>

              <?php if (get_sub_field($text)) : ?>
                <p class="industry_post__text text_grey">
                  <?php the_sub_field($text) ?>
                </p>
              <?php endif; ?>
              
              <?php $link = get_sub_field($link);
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="industry_post__link link_read_more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="link_span"><?php echo esc_html( $link_title ); ?></span></a>
                <?php endif; ?>

                <form 
                  class="hero__form form_industry"
                  action="<?php the_field($form_industry_formspree_url); ?>"
                  method="POST"
                  id="form_booking_data"
                >
                  <div class="form_industry__wrap industry_niche">
                    <input 
                      name="niche" 
                      type="text" 
                      value='<?php the_sub_field($title) ?>'
                      class="form-control" 
                      id="niche"
                    >
                  </div>

                  <?php if (have_rows($form_industry_inputs)) : ?>
                    <?php while (have_rows($form_industry_inputs)) : the_row(); 
                      $placeholder = 'placeholder';
                      $required = 'required';
                      $select_type_for_input = 'select_type_for_input';
                      $name_for_input = 'name_for_input';
                    ?>

                      <div class="form_industry__wrap">
                        <input 
                          placeholder="<?php the_sub_field($placeholder); ?>" 
                          name="<?php the_sub_field($name_for_input); ?>" 
                          type="<?php echo esc_html ( get_sub_field($select_type_for_input) ); ?>" 
                          class="form-control" 
                          id="user"
                          <?php 
                            if(get_sub_field($required) ) {
                              echo 'required';
                            };
                          ?>
                        >
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>

                  <div class="form_industry__wrap">
                    <textarea 
                      name="<?php the_sub_field($form_industry_textarea_name); ?>" 
                      placeholder="<?php the_sub_field($form_industry_textarea_placholder); ?>" 
                      class="form-control"
                    ></textarea>
                  </div>

                  <button class="button_violet" type="submit">
                    <?php if( get_field($form_industry_button_send_text) ): ?>
                      <?php the_field($form_industry_button_send_text); ?>
                    <?php endif; ?>
                  </button>

                </form>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <a href="#" class="industry_posts__hide button_violet">hide</a>
      </div>
    </div>
  </div>
  <a href="#" class="industry_posts__more button_violet">more</a>

</section>