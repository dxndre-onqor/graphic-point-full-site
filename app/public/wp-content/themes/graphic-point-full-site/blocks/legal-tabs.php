<!-- Legal Section (for Privacy Policy, Cookies Policy and Terms of Service) -->

<section class="legal-tabs">

    <div class="container">
        <div class="tabbed-panels">
            <ul class="nav legal-tab-list justify-content-center">
                <?php
                // Loop through the Repeater field to create tabs
                if (have_rows('legal_tabs')):
                    $tab_index = 0;
                    while (have_rows('legal_tabs')) : the_row();
                        $tab_index++;
                        $tab_title = get_sub_field('legal_tab_heading');
                ?>
                    <li class="nav-item tab <?php echo ($tab_index === 1) ? 'active' : ''; ?>">
                        <a class="nav-link" href="#panel-<?php echo $tab_index; ?>"><?php echo $tab_title; ?></a>
                    </li>
                <?php
                    endwhile;
                endif;
                ?>
            </ul>

            <?php
            // Loop through the Repeater field to display tab content
            if (have_rows('legal_tabs')):
                $tab_index = 0;
                while (have_rows('legal_tabs')) : the_row();
                    $tab_index++;
                    $tab_content = get_sub_field('legal_tab_content');
            ?>
                <div id="panel-<?php echo $tab_index; ?>" class="tab-content <?php echo ($tab_index === 1) ? 'active' : ''; ?>">
                    <?php echo $tab_content; ?>
                </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>

</section>
