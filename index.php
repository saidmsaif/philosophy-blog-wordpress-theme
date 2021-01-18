<?php
    get_header();

    get_template_part('template-parts/hero');
    
    if (is_home()) :
        get_template_part('template-parts/home-featured-post');
    endif;

?>

    <!-- s-content
    ===========================================zzzz======= -->
    <section class="s-content">

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            get_template_part('template-parts/post-formats/post', get_post_format());
                        }
                    }
                ?>
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">

                    <?php
                        philosophy_blog_home_pagination();
                    ?>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->

<?php
    get_footer();