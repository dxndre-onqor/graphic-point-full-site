<!-- Frequently Asked Questions Section -->
<section class="faqs">

<div class="container">

	<div class="text-area">

		<h2><?php the_sub_field('faqs_title'); ?></h2>	

	</div>

	<div class="accordion accordion-flush" id="accordionFlushExample">

		<?php while( have_rows('accordion_block') ): the_row(); 
			$headingText = get_sub_field('content_heading_faq');
			$bodyText = get_sub_field('content_text_faq');

			$tabCount = 1;
		?>

<?php $tabCount++ ?>

		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
					<?php echo $headingText ?>
				</button>
			</h2>
			<div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
				<p><?php echo $tabCount, $bodyText ?></p>
			</div>
		</div>
			
		
		<?php endwhile; ?>

	</div>

</div>



</section>