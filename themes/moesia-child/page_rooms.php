<?php

/*

Template Name: Rooms

*/
	get_header();
?>


	<div class="random">
	</div>
	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'moesia' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

