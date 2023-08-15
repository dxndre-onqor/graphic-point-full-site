<!-- Company Logos Section -->
	<section class="logo-carousel">
		<ul class="logo-slides">
			<?php while( have_rows('company_logo_image') ): the_row(); 
				$image = get_sub_field('company_image');
				// var_dump($image);
				?>
				<li>
					<img  alt="<?php echo $image['alt'] ?>" src="<?php echo $image['url']; ?>" />
					<?php echo wp_get_attachment_image( $image, 'full' ); ?>
				</li>
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