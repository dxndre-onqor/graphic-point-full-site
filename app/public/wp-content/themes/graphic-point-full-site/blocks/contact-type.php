<!-- Get in Touch (Type) Section -->

<section class="get-in-touch-type">

    <?php
        $contactHeader = get_sub_field('contact_header');
        $leadingText = get_sub_field('leading_text');
        $openingHours = get_sub_field('opening_hours');

        $phoneNumber = get_field('phone_number', 'option');
        $phoneIcon = get_sub_field('phone_icon');

        $emailAddress = get_field('email_address', 'option');
        $emailIcon = get_sub_field('email_icon');

        $enquiry_types = get_sub_field('enquiry_type');
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
                <a href="tel:<?php echo $phoneNumber ?>"><img src="<?php echo $phoneIcon['url'];?>" alt="<?php echo $phoneIcon['alt'];?>"><span><?php echo $phoneNumber ?></span></a>
            </div>
            <div class="col-12 col-md-6 contact-stat">
                <a href="mailto:<?php echo $emailAddress ?>"><img src="<?php echo $emailIcon['url'];?>" alt="<?php echo $emailIcon['alt'];?>"><span><?php echo $emailAddress ?></span></a>
            </div>
        </div>

        <section class="contact">

        <?php
            // Get the 'enquiry_type' repeater field values
            

            // print_r($enquiry_types);

            if ($enquiry_types) :
                // Create a dropdown menu
                echo '<select id="enquiry-dropdown">';
                echo '<option value="">Select an option</option>';
                foreach ($enquiry_types as $enquiry_type) {
                    echo '<option value="' . $enquiry_type['enquiry_type_title'] . '">' . $enquiry_type['enquiry_type_title'] . '</option>';
                }
                echo '</select>';
            
                // Create a container for the content
                echo '<div id="content-container">';
            
                // Loop through the repeater field and display the content
                foreach ($enquiry_types as $enquiry_type) {
                    echo '<div class="enquiry-content" data-option="' . $enquiry_type['enquiry_type_title'] . '" data-make_default="' . ($enquiry_type['make_default'] ? 'true' : 'false') . '">';
                    
                    echo do_shortcode($enquiry_type['contact_form_shortcode']);
                    echo '</div>';
                }
            
                echo '</div>';
            endif;
            ?>
        </section>

    </div>
</section>
</section>