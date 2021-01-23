<?php
/*
 * Template Name: Contact Page
 */

get_header();
get_template_part('template-parts/hero');
the_post();
?>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php
                    the_title();
                    ?>
                </h1>
            </div> <!-- end s-content__header -->

            <div class="s-content__media col-full">
                <?php
                    if (is_active_sidebar('philosophy-gmaps')) {
                        dynamic_sidebar('philosophy-gmaps');
                    }
                ?>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                <?php
                    the_content();
                ?>

                <div class="row block-1-2 block-tab-full">
                    <?php
                        if (is_active_sidebar('contact-information')) {
                            dynamic_sidebar('contact-information');
                        }
                    ?>
                </div>
            </div> <!-- end s-content__main -->
        </article>
    </section> <!-- s-content -->



<?php
get_footer();