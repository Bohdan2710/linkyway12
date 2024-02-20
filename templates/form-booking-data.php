<?php
  $form_main_formspree_url = 'form_main_formspree_url';
  $form_main_title = 'form_main_title';
  $form_main_inputs = 'form_main_inputs';
  $form_main_checkbox_text = 'form_main_checkbox_text';
  $form_main_checkbox_link = 'form_main_checkbox_link';
  $form_main_button_send_text = 'form_main_button_send_text';
?>
<form 
  class="hero__form form_booking_data"
  action="<?php the_field($form_main_formspree_url); ?>"
  method="POST"
  id="form_booking_data"
>


  <?php if( get_field($form_main_title) ): ?>
    <span class="form_booking_data__title">
      <?php the_field($form_main_title); ?>
    </span>
  <?php endif; ?>


  <?php if (have_rows($form_main_inputs)) : ?>
    <?php while (have_rows($form_main_inputs)) : the_row(); 
      $image = 'image';
      $placeholder = 'placeholder';
      $required = 'required';
      $select_type_for_input = 'select_type_for_input';
      $name_for_input = 'name_for_input';
    ?>

      <div class="form_booking_data__wrap">
        <label class="form-label">
          <?php if( !empty(get_sub_field($image)) ): ?>
            <img src="<?php echo get_sub_field($image)['url']; ?>" alt="<?php echo get_sub_field($image)['alt']; ?>" />
          <?php endif; ?>
        </label>
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

  <div class="form-check">
    <input class="form-check-input" checked type="checkbox" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
    
      <?php if( get_field($form_main_checkbox_text) ): ?>
        <?php the_field($form_main_checkbox_text); ?>
      <?php endif; ?>

      <?php 
      $link = get_field($form_main_checkbox_link);
      if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> 
            <?php echo esc_html( $link_title ); ?>
          </a>
      <?php endif; ?>
    </label>
  </div>
  <button class="button_violet" type="submit">
    <?php if( get_field($form_main_button_send_text) ): ?>
      <?php the_field($form_main_button_send_text); ?>
    <?php endif; ?>
  </button>
  
</form>