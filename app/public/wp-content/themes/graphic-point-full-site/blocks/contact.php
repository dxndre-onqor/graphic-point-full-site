<!-- Get in Touch Section -->

<section class="get-in-touch">

    <?php
        $contactHeader = get_sub_field('contact_header');
        $leadingText = get_sub_field('leading_text');
        $openingHours = get_sub_field('opening_hours');

        $phoneNumber = get_field('phone_number', 'option');
        $phoneIcon = get_sub_field('phone_icon');

        $emailAddress = get_field('email_address', 'option');
        $emailIcon = get_sub_field('email_icon');
    ?>

    <div class="container">

        <div class="row">
            <div class="stats-holder">
                <h2><?php echo $contactHeader ?></h2>
                <p class="lead"><?php echo $leadingText ?></p>
                <hr>
                <p class="lead"><?php echo $openingHours ?></p>
            </div>
            
        </div>
        <div class="row contact-stats">
            <div class="col-12 col-md-6 contact-stat">
                <a href="tel:<?php echo $phoneNumber ?>"><img src="<?php echo $phoneIcon['url'];?>" alt="<?php echo $phoneIcon['alt'];?>"> <?php echo $phoneNumber ?></a>
            </div>
            <div class="col-12 col-md-6 contact-stat">
                <a href="mailto:<?php echo $emailAddress ?>"><img src="<?php echo $emailIcon['url'];?>" alt="<?php echo $emailIcon['alt'];?>"> <?php echo $emailAddress ?></a>
            </div>
        </div>

    </div>
</section>