<?php

zerif_before_testimonials_trigger();

echo '<section class="testimonial" id="testimonials">';

	zerif_top_testimonials_trigger();

	echo '<div class="container">';

		echo '<div class="section-header">';

			/* Title */
			zerif_testimonials_header_title_trigger();

			/* Subtitle */
			zerif_testimonials_header_subtitle_trigger();

		echo '</div>';

		echo '<div class="row" data-scrollreveal="enter right after 0s over 1s">';

			echo '<div class="col-md-12">';

				$pinterest_style = '';
				$zerif_testimonials_pinterest_style = get_theme_mod('zerif_testimonials_pinterest_style');
				if( isset($zerif_testimonials_pinterest_style) && $zerif_testimonials_pinterest_style != 0 ) {
					$pinterest_style = 'testimonial-masonry';
				}

				echo '<div id="client-feedbacks" class="owl-carousel owl-theme ' . $pinterest_style . ' ">';

						if(is_active_sidebar( 'sidebar-testimonials' )):

							dynamic_sidebar( 'sidebar-testimonials' );
						
						else:

							if ( file_exists( get_stylesheet_directory_uri().'/images/testimonial1.jpg' ) ):
								the_widget('zerif_testimonial_widget', 'title=Dana Lorem&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri=' . get_stylesheet_directory_uri() . '/images/testimonial1.jpg');
							else:
								the_widget('zerif_testimonial_widget', 'title=Dana Lorem&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri=' . get_template_directory_uri() . '/images/testimonial1.jpg');
							endif;

							if ( file_exists( get_stylesheet_directory_uri().'/images/testimonial2.jpg' ) ):
								the_widget('zerif_testimonial_widget', 'title=Linda Guthrie&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri=' . get_stylesheet_directory_uri() . '/images/testimonial2.jpg');
							else:
								the_widget( 'zerif_testimonial_widget','title=Linda Guthrie&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_template_directory_uri().'/images/testimonial2.jpg' );
							endif;

							if ( file_exists( get_stylesheet_directory_uri().'/images/testimonial3.jpg' ) ):
								the_widget( 'zerif_testimonial_widget','title=Cynthia Henry&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_stylesheet_directory_uri().'/images/testimonial3.jpg' );
							else:
								the_widget( 'zerif_testimonial_widget','title=Cynthia Henry&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_template_directory_uri().'/images/testimonial3.jpg' );
							endif;
						endif;

				echo '</div>';

			echo '</div>';

		echo '</div>';

	echo '</div>';

	zerif_bottom_testimonials_trigger();

echo '</section>';

zerif_after_testimonials_trigger();

?>