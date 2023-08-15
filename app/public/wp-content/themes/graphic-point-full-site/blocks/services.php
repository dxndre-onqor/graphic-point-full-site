<!-- Services Section -->
	<section class="services">
		<div class="text-area container">

            <h2><?php the_sub_field('services_heading'); ?></h2>
            <p><?php the_sub_field('services_text') ?></p>			
            
		</div>
		<div class="individual-services">
            
            <?php if( have_rows('individual_service') ): ?>
                <ul class="individual-service">
                <?php while( have_rows('individual_service') ): the_row(); 
                    $serviceImage = get_sub_field('individual_service_image');
                    ?>
                    <li>
                        <a href="<?php the_sub_field('individual_service_link'); ?>">
                            <img src="<?php echo $serviceImage ?>">
                            <?php echo wp_get_attachment_image( $serviceImage, 'full' ); ?>
                            <span><?php the_sub_field('individual_service_title'); ?></span>
                        </a>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
		</div>
	</section>