<!-- About Intro Section (About Page) -->

<section class="about-intro">

    <?php
        $aboutLogo = get_sub_field('about_logo');
        $aboutIntroText = get_sub_field('about_intro_text');
     ?>

    <div class="container">

        <div class="row">

            <div class="col-12 col-md-4 image-side">
                <img src="<?php echo $aboutLogo['sizes']['full-HD']; ?>" alt="<?php echo $aboutLogo['alt']; ?>">
            </div>

            <div class="col-12 col-md-8 text-side">
                <p><?php echo $aboutIntroText ?></p>
            </div>

        </div>

    </div>
</section>