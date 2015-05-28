<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Moesia
 */
?>

	<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
	
	<?php tha_footer_before(); ?>
	<?php if ( is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="my-footer" role="contentinfo">
		<?php tha_footer_top(); ?>
		<div class="container">
			<div class="row">
				<?php if ( get_theme_mod('site_logo') ) :
					echo '<a class="footer-logo" href="' . esc_url( home_url( '/' ) ) . '" title="';
						bloginfo('name');
					echo '"><img src="' . esc_url(get_theme_mod('site_logo')) . '" alt="';
						bloginfo('name');
					echo '" /></a>';
				else :
					echo '<h1 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
						bloginfo( 'name' );
					echo '</a></h1>';
					echo '<h2 class="site-description">';
						bloginfo( 'description' );
					echo '</h2>';
				endif; ?>

				<div class="col-md-8 col-md-offset-4 md-padding">
					<div class="row">
						<div class="col-md-3 fortune-data">
							<span class="data-title"><i class="fa fa-map-marker data-icon"></i>ADDRESS</span>
							<a href="https://www.google.com/maps/place/Fortune+Jongno+Hostel+in+Seoul/@37.5745208,126.9896653,18z/data=!4m2!3m1!1s0x0:0x90ba8dcdda08d2fa" target="_blank">
								<ul class="data-content">
									<li>38, Samil-daero 32-gil, Jongno-Gu, 110-310</li>
									<li>Seoul, South Korea</li>
								</ul>
							</a>
						</div>
						<div class="col-md-3 fortune-data">
							<span class="data-title"><i class="fa fa-envelope data-icon"></i>EMAIL</span>
							<ul class="data-content">
								<li>fortunehosteljongno@gmail.com</li>
							</ul>
						</div>
						<div class="col-md-3 fortune-data">
							<span class="data-title"><i class="fa fa-phone data-icon"></i>PHONE</span>
							<ul class="data-content">
								<li>+07-8958-0505</li>
							</ul>
						</div>
						<div class="col-md-3 fortune-data">
							<a href="http://www.facebook.com" target="_blank" class="footer-facebook">
								<i class="fa fa-facebook-official" style="padding-right: 10px;"></i>
								<div>Follow us on Facebook!</div>								
							</a>							
						</div>
					</div>
				</div>


			</div>
		</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
