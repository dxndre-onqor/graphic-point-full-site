<!-- Text & Media Section (About Page) -->

<section class="text-media about">

    <div class="container">

        <?php while( have_rows('text_and_image_block_about') ): the_row(); 
            $correspondingImage = get_sub_field('corresponding_image_about');
            $contentHeading = get_sub_field('content_heading_about');
            $contentText = get_sub_field('content_text_about');
            $correspondingImagePosition = get_sub_field('corresponding_image_position_about');
            
            // var_dump($correspondingImage);
            // var_dump($contentHeading);
            // var_dump($contentText);
            // var_dump($correspondingImagePosition);

        ?>

        <div class="text-media-content">

            <div class="image-side <?php if( get_sub_field('corresponding_image_position_about') ) {
        echo "order-2";
    } ?>">
                <img src="<?php echo $correspondingImage['url'];?>" alt="<?php echo $correspondingImage['alt'];?>">
            </div>

            <div class="text-side <?php if( get_sub_field('corresponding_image_position_about') ) {
        echo "text-end";
    } ?>">
                <div class="text-container">
                    <h2><?php echo $contentHeading ?></h2>
                    <p><?php echo $contentText ?></p>
                </div>
            </div>

        </div>

        <?php endwhile; ?>

    </div>

</section>