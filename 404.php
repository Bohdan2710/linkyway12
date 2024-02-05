<?php

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <section class="error_page">
                <p>
                    <?php esc_attr_e('Error 404, Ooops ! This page does not exist !','textdomaintomodify'); ?>
                </p>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

    get_template_part( 'templates/preloader');?>

get_footer();
