<?php
// Check value exists.
if (have_rows('block_sections')) :
    // Loop through rows.
    while (have_rows('block_sections')) : the_row();
        // Case: Hero Section.
        if (get_row_layout() == 'hero_section') : ?>
            <?php include 'blocks/hero.php'; ?>
        <?php endif;

        // Case: Company Logos Section.
        if (get_row_layout() == 'company_logos_section') : ?>
            <?php include 'blocks/logo-carousel.php'; ?>
        <?php endif;

        // Case: Text & Media Section.
        if (get_row_layout() == 'text_and_media_section') : ?>
            <?php include 'blocks/text-media.php'; ?>
        <?php endif;

        // Case: About Intro Section Section (for About Us page).
        if (get_row_layout() == 'about_intro_section') : ?>
            <?php include 'blocks/about-intro.php'; ?>
        <?php endif;

        // Case: Text & Media Section (for About Us page).
        if (get_row_layout() == 'text_and_media_section_about') : ?>
            <?php include 'blocks/text-media.php'; ?>
        <?php endif;

        // Case: Our Services Section.
        if (get_row_layout() == 'services_section') : ?>
            <?php include 'blocks/services.php'; ?>
        <?php endif;

    // End loop.
    endwhile;
endif;
?>
