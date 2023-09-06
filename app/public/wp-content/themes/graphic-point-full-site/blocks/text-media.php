<!-- Text & Media Section -->

<section class="text-media">

    <?php while( have_rows('text_and_image_block') ): the_row(); 
        $correspondingImage = get_sub_field('corresponding_image');
        $contentHeading = get_sub_field('content_heading');
        $contentText = get_sub_field('content_text');
        $correspondingImagePosition = get_sub_field('corresponding_image_position');
        
        // var_dump($correspondingImage);
        // var_dump($contentHeading);
        // var_dump($contentText);
        // var_dump($correspondingImagePosition);

     ?>

    <div class="text-media-content">

        <div class="image-side <?php if( get_sub_field('corresponding_image_position') ) {echo "order-2";} ?>">
            <div class="image-overlay"></div>
            <img src="<?php echo $correspondingImage; ?>">
        </div>
        

        <div class="text-side">
            <div class="text-container">
                <h2><?php echo $contentHeading ?></h2>
                <p><?php echo $contentText ?></p>
            </div>
        </div>

    </div>

    <?php endwhile; ?>

</section>