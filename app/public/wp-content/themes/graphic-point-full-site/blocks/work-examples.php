<?php
// Check value exists.
if (have_rows('block_sections')) :
    // Loop through rows.
    while (have_rows('block_sections')) : the_row();

        // Case: Work Examples Section (for Submit Artwork page).      
        if (get_row_layout() == 'work_examples_submit_artwork') : ?>
            
			<?php
				$workExamplesHeader = get_sub_field("work_examples_header");
				$gallery_images = get_sub_field('work_examples_gallery'); 
			?>

			<!-- Work Examples Section (for Submit Artwork page) -->
			<section class="our-work-examples">

				<div class="container">

					<h2><?php echo $workExamplesHeader; ?></h2>
					
					<div class="work-slides">

						<?php if ($gallery_images) : ?>
							<div id="gallery-carousel" class="carousel slide carousel-fade" data-ride="carousel">
								<div class="carousel-inner">
									<?php $is_first = true; ?>
									<?php foreach ($gallery_images as $index => $image) : ?>
										<div class="carousel-item <?php echo $is_first ? 'active' : ''; ?>">
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
										</div>
										<?php $is_first = false; ?>
									<?php endforeach; ?>
								</div>
								
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<?php foreach ($gallery_images as $index => $image) : ?>
										<li data-target="#gallery-carousel" data-slide-to="<?php echo $index; ?>" <?php echo $index === 0 ? 'class="active"' : ''; ?>></li>
									<?php endforeach; ?>
								</ol>
								
								<!-- Controls -->
								<!-- <a class="carousel-control-prev" href="#gallery-carousel" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only"></span>
								</a>
								<a class="carousel-control-next" href="#gallery-carousel" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only"></span>
								</a> -->
							</div>
						<?php endif; ?>
					</div>

				</div>

			</section>
		
        <?php endif;

    // End loop.
    endwhile;
endif;
?>


