<!-- Our Work/Services Section -->
<section class="our-work">

<?php
	$ourWorkHeader = get_sub_field("our_work_header");
	$leadingText = get_sub_field("our_work_leading_text");
	$ctaLink = get_sub_field("cta_link");
?>

<div class="container">
	<div class="row">
		<h2><?php echo $ourWorkHeader; ?></h2>
		<p class="lead"><?php echo $leadingText; ?></p>
	</div>
</div>

<div class="work-slides">
	<ul class="nav nav-tabs justify-content-center desktop-select" id="myTab" role="tablist">
		<?php while (have_rows("work_tabs")):
the_row(); ?>
		<li class="nav-item">
			<a class="nav-link <?php if (get_row_index() === 1) echo 'active'; ?>" id="<?php echo sanitize_title(get_sub_field('tab_heading')); ?>-tab" data-toggle="tab" href="#<?php echo sanitize_title(get_sub_field('tab_heading')); ?>" role="tab" aria-controls="<?php echo sanitize_title(get_sub_field('tab_heading')); ?>" aria-selected="true"><?php the_sub_field('tab_heading'); ?></a>
		</li>
		<?php
endwhile; ?>
	</ul>
	<div class="drop-down-select">
		<div class="drop-down-select__active">
			<p></p>
			<svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
				<g id="Chevron Icon">
					<path id="Chevron Icon_2" fill-rule="evenodd" clip-rule="evenodd" d="M7.0006 5.33339L1.39995 0L0 1.33314L5.60065 6.66653L5.60031 6.66686L7.00026 8L14 1.33429L12.6 0.00115049L7.0006 5.33339Z" fill="black"/>
				</g>
			</svg>
		</div>
		<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
			<?php 
				$itemCount = 0;
			?>
			<?php while (have_rows("work_tabs")):
			$itemCount = $itemCount + 1;
	the_row(); ?>
			<li class="nav-item">
				<a class="nav-link drop-down-item-<?php echo $itemCount ?> <?php if (get_row_index() === 1) echo 'active'; ?>" id="<?php echo sanitize_title(get_sub_field('tab_heading')); ?>-tab" data-toggle="tab" href="#<?php echo sanitize_title(get_sub_field('tab_heading')); ?>" role="tab" aria-controls="<?php echo sanitize_title(get_sub_field('tab_heading')); ?>" aria-selected="true"><?php the_sub_field('tab_heading'); ?></a>
			</li>
			<?php
	endwhile; ?>
		</ul>
	</div>

	<div class="tab-content" id="myTabContent">
		<?php while (have_rows("work_tabs")):
		the_row(); ?>
		<div class="tab-pane fade <?php if (get_row_index() === 1) echo 'show active'; ?>" id="<?php echo sanitize_title(get_sub_field("tab_heading")); ?>" role="tabpanel" aria-labelledby="<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-tab">
			<div id="<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Carousel Indicators -->
		<ol class="carousel-indicators">
			
			<a class="carousel-control-prev" href="#<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-carousel" role="button" data-slide="prev">
				<!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
`					<path fill-rule="evenodd" clip-rule="evenodd" d="M2.82878 8.00065L8.48651 2.34293L7.0723 0.928711L1.41457 6.58644L1.41422 6.58609L9.22763e-06 8.0003L7.07108 15.0714L8.48529 13.6572L2.82878 8.00065Z" fill="white"/>
				</svg>
			</a>

			<?php $gallery_images = get_sub_field("tab_gallery");
			// Get the gallery images for this tab ?>

			<?php foreach ($gallery_images as $index => $image): ?>
			<li data-target="#<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-carousel" data-slide-to="<?php echo $index; ?>" <?php if ($index === 0) {
				echo 'class="active"';
			} ?>></li>
						<?php
			endforeach; ?>

			<a class="carousel-control-next" href="#<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-carousel" role="button" data-slide="next">
				<!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M6.14424 7.99935L0.486511 13.6571L1.90072 15.0713L7.55845 9.41356L7.5588 9.41391L8.97301 7.9997L1.90195 0.928629L0.487732 2.34284L6.14424 7.99935Z" fill="white"/>
				</svg>
			</a>

		</ol>

		<!-- Carousel Slides -->
		<div class="carousel-inner">
			<?php foreach ($gallery_images as $index => $image): ?>

			<div class="carousel-item <?php if ($index === 0) {echo "active";} ?>">
				<div class="carousel-image-container">
					<img src="<?php echo esc_url($image["url"]); ?>" class="d-block w-100" alt="<?php echo esc_attr($image["alt"]); ?>">
				</div>
				<?php
					$captionHeading = get_sub_field('tab_heading');
					$captionText = get_sub_field('caption_text');

					if( get_sub_field('enable_caption') ) {
						echo '<div class="carousel-caption">';
						echo '<h5 class="heading d-none d-md-block">' . $captionHeading . '</h5>';
						echo '<p class="lead">' . $captionText . '</p>';
						echo '</div>';
					}
				?>

			</div>

			<?php
			endforeach; ?>

			
		</div>
	</div>

</div>
		<?php
endwhile; ?>
</div>

</div>

<div class="cta-section">
	<a href="<?php echo $ctaLink['url'] ?>" class="cta"><?php echo $ctaLink['title'] ?></a>
</div>

</section>