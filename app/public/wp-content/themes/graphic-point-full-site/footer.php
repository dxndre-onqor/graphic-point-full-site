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

					<div class="col-12 col-md-8 col-lg-5 footer-menu-links-holder">
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
							<li class="d-none d-md-block contact-links"><a href="tel:<?php echo $phoneNumber; ?>" target="_blank"><?php echo $phoneNumber ?></a></li>
							<li class="d-none d-md-block contact-links"><a href="mailTo:<?php echo $emailAddress; ?>" target="_blank"><?php echo $emailAddress ?></a></li>
							<li class="d-none"><a href="<?php echo $artworkLink ?>"><?php echo $artworkCTA ?></a></li>

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

		<section class="cookie-banner d-none">
		<?php
			//if ($cookieBannerShow) { // Replace $cookieBannerShow with your PHP condition
			?>
			<div class="cookie-banner__container">
				<div class="cookie-banner">
					<div class="container jsb">
						<div class="row">
							<div class="cookie-banner__item col-12 col-md-6 col-lg-3">
								<h3>Our use of cookies</h3>
								<p>onqor.com uses cookies, some are necessary for the operation of the website and some are designed to improve your experience. For more information, <a href="/privacy-policy/">click here.</a></p>
							</div>

							<div class="cookie-banner__item col-12 col-md-6 col-lg-3">
								<h3>Necessary cookies</h3>
								<p>Are essential to move around onqor.com and use its core functionality and enhanced features. Without these cookies, services you have asked for cannot be provided.</p>
							</div>

							<!-- toggle -->
							<div class="cookie-banner__item col-12 col-md-6 col-lg-3">
								<h3>Functional cookies</h3>
								<p>Allow onqor.com to remember choices you make to give you better functionality and personal features.</p>
								<label class="switch">
									<input type="checkbox">
									<span class="slider round"></span>
								</label>
							</div>

							<!-- toggle -->
							<div class="cookie-banner__item col-12 col-md-6 col-lg-3 last">
								<h3>Performance cookies</h3>
								<p>Help improve the performance of onqor.com by collecting and reporting information about how you use the website.</p>
								<label class="switch">
									<input checked type="checkbox" onclick="toggleCookie();">
									<span class="slider round"></span>
								</label>
							</div>
						</div>
						

						<!-- close button -->
						<div onclick="cookieClick(cookieAccepted)">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="cross"><path d="M12.3477 9.99858L19.5075 2.85447C19.821 2.54089 19.9972 2.11558 19.9972 1.67211C19.9972 1.22864 19.821 0.80333 19.5075 0.489749C19.1939 0.176168 18.7687 0 18.3253 0C17.8819 0 17.4566 0.176168 17.1431 0.489749L10 7.65052L2.8569 0.489749C2.54337 0.176168 2.11812 -3.30411e-09 1.67471 0C1.2313 3.30411e-09 0.806058 0.176168 0.492521 0.489749C0.178985 0.80333 0.00284159 1.22864 0.00284159 1.67211C0.00284158 2.11558 0.178985 2.54089 0.492521 2.85447L7.65227 9.99858L0.492521 17.1427C0.336458 17.2975 0.212588 17.4817 0.128055 17.6846C0.0435221 17.8875 0 18.1052 0 18.3251C0 18.5449 0.0435221 18.7626 0.128055 18.9655C0.212588 19.1684 0.336458 19.3526 0.492521 19.5074C0.64731 19.6635 0.831467 19.7874 1.03437 19.8719C1.23727 19.9565 1.4549 20 1.67471 20C1.89452 20 2.11215 19.9565 2.31505 19.8719C2.51796 19.7874 2.70211 19.6635 2.8569 19.5074L10 12.3466L17.1431 19.5074C17.2979 19.6635 17.482 19.7874 17.6849 19.8719C17.8878 19.9565 18.1055 20 18.3253 20C18.5451 20 18.7627 19.9565 18.9656 19.8719C19.1685 19.7874 19.3527 19.6635 19.5075 19.5074C19.6635 19.3526 19.7874 19.1684 19.8719 18.9655C19.9565 18.7626 20 18.5449 20 18.3251C20 18.1052 19.9565 17.8875 19.8719 17.6846C19.7874 17.4817 19.6635 17.2975 19.5075 17.1427L12.3477 9.99858Z" fill="black"></path></svg>
						</div>
					</div>
				</div>
			</div>
			<?php
			// }
			?>
		</section>
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
