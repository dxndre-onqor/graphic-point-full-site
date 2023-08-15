<?php
/**
 * Template Name: About Us Page
 * Description: Page template About (Full Width).
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>

	<?php the_post_thumbnail(); ?>

	<?php include('blocks-builder.php'); ?>

	<?php

		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'graphic-point-full-site' ) . '">',
				'after'    => '</nav>',
				'pagelink' => esc_html__( 'Page %', 'graphic-point-full-site' ),
			)
		);
		edit_post_link(
			esc_attr__( 'Edit', 'graphic-point-full-site' ),
			'<span class="edit-link">',
			'</span>'
		);
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
