		<?php
			// Variables for the footer
			// The UI for this can be found in the Footer Menu Options page

			$siteLogo = get_field('site_logo', 'option');
			$leadingText = get_field('footer_leading_text', 'option');
			$phoneNumber = get_field('phone_number', 'option');
			$phoneIcon = get_field('phone_icon', 'option');
			$emailAddress = get_field('email_address', 'option');
			$emailIcon = get_field('email_icon', 'option');
			$artworkCTA = get_field('submit_artwork_cta', 'option');
			$artworkLink = get_field('submit_artwork_link', 'option');
			$facebookIcon = get_field('facebook_icon', 'option');
			$facebookLink = get_field('facebook_link', 'option');
			$xIcon = get_field('twitter_icon', 'option');
			$xLink = get_field('twitter_link', 'option');
			$instaLink = get_field('instagram_link', 'option');
			$instagramIcon = get_field('instagram_icon', 'option');
		?>
			
			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->

		<footer id="footer">
			<div class="container">
				<div class="row">

					<div class="col-md-3 col-lg-4 d-none d-lg-flex">
						<div class="logo-section">
							<a href="/"><img src="<?php echo $siteLogo['url']; ?>" alt="<?php echo $siteLogo['alt']; ?>"></a>
							<span class="footer-leading-text"><?php echo $leadingText ?><span>
						</div>
					</div>

					<div class="col-12 col-md-8 col-lg-5">
						<?php
							if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
								/*
									Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
									Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
									!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
								*/
								wp_nav_menu(
									array(
										'container'       => 'nav',
										'container_class' => 'footer-menu-links',
										//'fallback_cb'     => 'WP_Bootstrap4_Navwalker_Footer::fallback',
										'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
										'theme_location'  => 'footer-menu',
										'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
									)
								);
							endif;

							if ( is_active_sidebar( 'third_widget_area' ) ) :
						?>
							<div class="col-md-12">
								<?php
									dynamic_sidebar( 'third_widget_area' );

									if ( current_user_can( 'manage_options' ) ) :
								?>
									<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge bg-secondary"><?php esc_html_e( 'Edit', 'graphic-point-full-site' ); ?></a></span><!-- Show Edit Widget link -->
								<?php
									endif;
								?>
							</div>
						<?php
							endif;
						?>
					</div>

					<div class="col-12 col-md-4 col-lg-3">
						<ul class="footer-contact-section">
							<li class="d-none d-md-block"><?php echo $phoneNumber ?></li>
							<li class="d-none d-md-block"><?php echo $emailAddress ?></li>
							<li class="d-none d-md-block"><a href="<?php echo $artworkLink ?>"><?php echo $artworkCTA ?></a></li>

							<div class="socials">
								<ul>
									<li><a href="<?php echo $facebooklink; ?>" target="_blank"><img src="<?php echo $facebookIcon['url']; ?>"></a></li>
									<li><a href="<?php echo $twitterlink; ?>" target="_blank"><img src="<?php echo $xIcon['url']; ?>"></a></li>
									<li><a href="<?php echo $instagramlink; ?>" target="_blank"><img src="<?php echo $instagramIcon['url']; ?>"></a></li>

									<li class="d-block d-md-none"><a href="tel:<?php echo $phoneNumber; ?>" target="_blank"><img src="<?php echo $phoneIcon['url']; ?>"></a></li>
									<li class="d-block d-md-none"><a href="mailTo:<?php echo $emailAddress; ?>" target="_blank"><img src="<?php echo $emailIcon['url']; ?>"></a></li>
								</ul>
							</div>
						</ul>
					</div>
					
					

					
				</div><!-- /.row -->
				<div class="row d-flex d-lg-none logo-section-mobile">
					<div class="col-4">
						<a href="/"><img src="<?php echo $siteLogo['url']; ?>" alt="<?php echo $siteLogo['alt']; ?>"></a>
					</div>
					<div class="col-8 d-flex mobile-footer-leading-text-holder">
						<span class="footer-leading-text"><?php echo $leadingText ?><span>
					</div>
				</div>
			</div><!-- /.container -->

			<div class="credit">
				<span>Designed and built by <a href="https://www.onqor.com" target="_blank">ONQOR</a>.</span>
			</div>

		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
