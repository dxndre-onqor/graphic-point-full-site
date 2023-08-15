<!-- Hero Section -->
	<section class="hero">
		<div class="text-side">
			<div class="text-side-content">


				<h1><?php the_sub_field('leading_text'); ?></h1>
				<a class="cta" href="<?php the_sub_field('cta_link'); ?>"><?php the_sub_field('cta_text'); ?></a>			
				
				<!-- Setting up variable for Hero Image	 -->
				<?php $heroImage = get_sub_field('hero_image'); ?>

			</div>

			<?php $text ?>
			<a><?php the_field('cta_text'); ?></a>
		</div>
		<div class="image-side">
			<img src="<?php echo $heroImage ?>">
		</div>
	</section>