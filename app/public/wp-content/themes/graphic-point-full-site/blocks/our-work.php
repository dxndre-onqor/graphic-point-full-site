<!-- Our Work Section -->
	<section class="our-work">

		<?php 
			$ourWorkHeader = get_sub_field('our_work_header');
			$leadingText = get_sub_field('our_work_leading_text');
		?>

		<div class="container">
			<div class="row">
				<h2><?php echo $ourWorkHeader ?></h2>
				<p class="lead"><?php echo $leadingText ?></p>
			</div>
		</div>

		<ul class="work-slides">
			<?php while( have_rows('work_tabs') ): the_row(); 
				$tabHeading = get_sub_field('tab_heading');
				$tabGallery = get_sub_field('tab_gallery');
				// var_dump($image);
				?>

				<ul>
					<li>
						<a><?php echo $tabHeading ?></a>
					</li>
				</ul>

				<?php 
					if( $tabGallery ): ?>
						<div id="slider" class="flexslider">
							<ul class="slides">
								<?php foreach( $tabGallery as $image ): ?>
									<li>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<p><?php echo esc_html($image['caption']); ?></p>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div id="carousel" class="flexslider">
							<ul class="slides">
								<?php foreach( $tabGallery as $image ): ?>
									<li>
										<img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
			<?php endwhile; ?>
		</ul>





		
	</section>
    
	<!-- <script>
		$(document).ready(function(){
			$('.logo-slides').slick({
				setting-name: setting-value
		});
});
	</script> -->