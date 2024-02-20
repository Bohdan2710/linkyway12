<?php
  $form_modal_formspree_url = 'form_modal_formspree_url';
  $form_modal_inputs = 'form_modal_inputs';
  $form_modal_button_send_text = 'form_modal_button_send_text';
  $form_modal_close_button = "form_modal_close_button";
  $form_modal_textarea_name = 'form_modal_textarea_name';
  $form_modal_textarea_placholder = 'form_modal_textarea_placholder';
?>
<div class="modal_form_packages">
  <form 
  class="modal_form_niche_wrap"
  action="<?php the_field($form_modal_formspree_url, 1031); ?>"
  method="POST"
  id="form_booking_data"
  >

  <div class="form_packages__close">
    <?php $image = get_field($form_modal_close_button, 1031);
      if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
    <?php endif; ?>
  </div>

  <?php if (have_rows($form_modal_inputs, 1031)) : ?>
    <?php while (have_rows($form_modal_inputs, 1031)) : the_row(); 
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
      name="<?php the_sub_field($form_modal_textarea_name, 1031); ?>" 
      placeholder="<?php the_sub_field($form_modal_textarea_placholder, 1031); ?>" 
      class="form-control"
    ></textarea>
  </div>

  <?php if( get_field($form_modal_button_send_text, 1031) ): ?>
    <button class="button_violet" type="submit">
      <?php the_field($form_modal_button_send_text, 1031); ?>
    </button>
  <?php endif; ?>

  </form>
</div>