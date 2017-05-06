<?php zerif_before_our_focus_trigger(); ?>

<section class="focus" id="focus">

	<?php zerif_top_our_focus_trigger(); ?>

	<div class="container">

		<!-- SECTION HEADER -->

		<div class="section-header">

			<!-- SECTION TITLE AND SUBTITLE -->

			<?php

			/* Title */
			zerif_our_focus_header_title_trigger();

			/* Subtitle */
			zerif_our_focus_header_subtitle_trigger();

			?>

		</div>

		<div class="row">

				<?php
				if ( is_active_sidebar( 'sidebar-ourfocus' ) ) :
					dynamic_sidebar( 'sidebar-ourfocus' );
				else:

					if ( file_exists( get_stylesheet_directory_uri().'/images/parallax.png' ) ):
						the_widget( 'zerif_ourfocus','title=PARALLAX EFFECT&text=Create memorable pages with smooth parallax effects that everyone loves. Also, use our lightweight content slider offering you smooth and great-looking animations.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/parallax.png", array('before_widget' => '', 'after_widget' => '') );
					else:
						the_widget( 'zerif_ourfocus','title=PARALLAX EFFECT&text=Create memorable pages with smooth parallax effects that everyone loves. Also, use our lightweight content slider offering you smooth and great-looking animations.&link=#&image_uri='.get_template_directory_uri()."/images/parallax.png", array('before_widget' => '', 'after_widget' => '') );
					endif;

					if ( file_exists( get_stylesheet_directory_uri().'/images/woo.png' ) ):
						the_widget( 'zerif_ourfocus','title=WOOCOMMERCE&text=Build a front page for your WooCommerce store in a matter of minutes. The neat and clean presentation will help your sales and make your store accessible to everyone.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/woo.png", array('before_widget' => '', 'after_widget' => '') );
					else:
						the_widget( 'zerif_ourfocus','title=WOOCOMMERCE&text=Build a front page for your WooCommerce store in a matter of minutes. The neat and clean presentation will help your sales and make your store accessible to everyone.&link=#&image_uri='.get_template_directory_uri()."/images/woo.png", array('before_widget' => '', 'after_widget' => '') );
					endif;

					if ( file_exists( get_stylesheet_directory_uri().'/images/ccc.png' ) ):
						the_widget( 'zerif_ourfocus','title=CUSTOM CONTENT BLOCKS&text=Showcase your team, products, clients, about info, testimonials, latest posts from the blog, contact form, additional calls to action. Everything translation ready.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/ccc.png", array('before_widget' => '', 'after_widget' => '') );
					else:
						the_widget( 'zerif_ourfocus','title=CUSTOM CONTENT BLOCKS&text=Showcase your team, products, clients, about info, testimonials, latest posts from the blog, contact form, additional calls to action. Everything translation ready.&link=#&image_uri='.get_template_directory_uri()."/images/ccc.png", array('before_widget' => '', 'after_widget' => '') );
					endif;

					if ( file_exists( get_stylesheet_directory_uri().'/images/ti-logo.png' ) ):
						the_widget( 'zerif_ourfocus','title=GO PRO FOR MORE FEATURES&text=Get new content blocks: pricing table, Google Maps, and more. Change the sections order, display each block exactly where you need it, customize the blocks with whatever colors you wish.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/ti-logo.png", array('before_widget' => '', 'after_widget' => '') );
					else:
						the_widget( 'zerif_ourfocus','title=GO PRO FOR MORE FEATURES&text=Get new content blocks: pricing table, Google Maps, and more. Change the sections order, display each block exactly where you need it, customize the blocks with whatever colors you wish.&link=#&image_uri='.get_template_directory_uri()."/images/ti-logo.png", array('before_widget' => '', 'after_widget' => '') );
					endif;

				endif;
				?>

		</div>

	</div> <!-- / END CONTAINER -->

	<?php zerif_bottom_our_focus_trigger(); ?>

</section>  <!-- / END FOCUS SECTION -->

<?php zerif_after_our_focus_trigger(); ?>