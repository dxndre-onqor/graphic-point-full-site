<!-- Services Section -->
	<section class="services">
		<div class="text-area container">

            <?php the_sub_field('services_heading'); ?>
            <p><?php the_sub_field('services_text') ?></p>			
            
		</div>
		<div class="individual-services">
            <div id="individual-services-carousel" class="carousel slide" data-ride="carousel">
                <div class="service-carousel">
                    <?php
                    if (have_rows('individual_service')):
                        $item_count = 0;

                        while (have_rows('individual_service')): the_row();
                            $serviceImage = get_sub_field('individual_service_image');

                            // Output the carousel item
                            echo '<div class="' . ($item_count === 0 ? ' active' : '') . '">';
                            echo '<div class="item-content-container text-center">';
                            echo '<a href="' . get_sub_field('individual_service_link') . '">';
                            echo '<img src="' . $serviceImage . '" alt="' . get_sub_field('individual_service_title') . '">';
                            echo '<div class="caption">';
                            echo '<h3>' . get_sub_field('individual_service_title') . '</h3>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                            echo '</div>';

                            $item_count++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>