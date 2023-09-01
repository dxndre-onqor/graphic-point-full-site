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
	<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
		<?php while (have_rows("work_tabs")):
the_row(); ?>
		<li class="nav-item">
			<a class="nav-link <?php if (get_row_index() === 1) echo 'active'; ?>" id="<?php echo sanitize_title(get_sub_field('tab_heading')); ?>-tab" data-toggle="tab" href="#<?php echo sanitize_title(get_sub_field('tab_heading')); ?>" role="tab" aria-controls="<?php echo sanitize_title(get_sub_field('tab_heading')); ?>" aria-selected="true"><?php the_sub_field('tab_heading'); ?></a>
		</li>
		<?php
endwhile; ?>
	</ul>

	<div class="tab-content" id="myTabContent">
		<?php while (have_rows("work_tabs")):
the_row(); ?>
		<div class="tab-pane fade <?php if (get_row_index() === 1) echo 'show active'; ?>" id="<?php echo sanitize_title(get_sub_field("tab_heading")); ?>" role="tabpanel" aria-labelledby="<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-tab">
			<div id="<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Carousel Indicators -->
		<ol class="carousel-indicators">
			<?php $gallery_images = get_sub_field("tab_gallery");
// Get the gallery images for this tab

?>
			<?php foreach ($gallery_images as $index => $image): ?>
			<li data-target="#<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-carousel" data-slide-to="<?php echo $index; ?>" <?php if ($index === 0) {
	echo 'class="active"';
} ?>></li>
			<?php
endforeach; ?>
		</ol>

		<!-- Carousel Slides -->
		<div class="carousel-inner">
			<?php foreach ($gallery_images as $index => $image): ?>
			<div class="carousel-item <?php if ($index === 0) {
	echo "active";
} ?>">
				<img src="<?php echo esc_url($image["url"]); ?>" class="d-block w-100" alt="<?php echo esc_attr($image["alt"]); ?>">

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
		
		<!-- Carousel Controls -->
		<a class="carousel-control-prev" href="#<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</a>
		<a class="carousel-control-next" href="#<?php echo sanitize_title(get_sub_field("tab_heading")); ?>-carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
	</div>

</div>
		<?php
endwhile; ?>
</div>

</div>

<div class="cta-section">
	<a href="<?php $ctaLink['url'] ?>" class="cta"><?php echo $ctaLink['title'] ?></a>
</div>

</section>