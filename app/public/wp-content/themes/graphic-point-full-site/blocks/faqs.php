<!-- Frequently Asked Questions Section -->
<section class="faqs">

<div class="container">

	<div class="text-area">

		<h2><?php the_sub_field('faqs_title'); ?></h2>	

	</div>

	<div class="accordion accordion-flush" id="accordionFlushExample">
    <?php $tabCount = 1; // Initialize tab count outside the loop ?>
    <?php while (have_rows('accordion_block')) : the_row();
        $headingText = get_sub_field('content_heading_faq');
        $bodyText = get_sub_field('content_text_faq');
    ?>

        <div class="accordion-item">
            <?php $accordionItemId = 'accordionItem' . $tabCount; // Generate a unique ID for each item ?>
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($accordionItemId); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr($accordionItemId); ?>">
                    <?php echo $headingText; ?>
                </button>
            </h2>
            <div id="<?php echo esc_attr($accordionItemId); ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p><?php echo $bodyText; ?></p>
                </div>
            </div>
        </div>

        <?php $tabCount++; // Increment tab count for the next item ?>
    <?php endwhile; ?>
</div>

</div>

</section>