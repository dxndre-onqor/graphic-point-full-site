<!-- Submit Artwork Intro Section -->

<section class="submit-artwork-intro">

    <?php
        $submitArtworkHeading = get_sub_field('submit_artwork_heading');
        $introText = get_sub_field('submit_artwork_intro_text');
        $checklistHeading = get_sub_field('submit_artwork_checklist_heading');
     ?>

    <div class="container">

        <div class="row">
            <h2><?php echo $submitArtworkHeading; ?></h2>
            <p class="lead"><?php echo $introText; ?></p>
        </div>

        <div class="row">
            <h3><?php echo $checklistHeading; ?></h3>
        </div>

        <ul class="checklist row">
            <?php while( have_rows('submit_artwork_checklist') ) : the_row();

                $checklistIcon = get_sub_field('checklist_icon');
                $checklistText = get_sub_field('checklist_text');

                ?>
                    <li class="checklist-item col">
                        <div class="img-holder">
                            <img src="<?php echo $checklistIcon['url'];?>" alt="<?php echo $checklistIcon['alt'];?>">
                        </div>
                        <div class="text-holder">
                            <p><?php echo $checklistText ?></p>
                        </div>

                        
                    </li>
            <?php endwhile; ?>
        </ul>

    </div>
</section>