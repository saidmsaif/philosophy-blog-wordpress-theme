<?php
    get_header();

    require_once get_theme_file_path('/template-parts/hero.php');
?>





    <div class="pageheader-content row">
        <div class="col-full">

            <div class="featured">

                <div class="featured__column featured__column--big">
                    <div class="entry" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/featured/featured-guitarman.jpg');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0">Music</a></span>

                            <h1><a href="#0" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar"  src="<?php echo get_template_directory_uri(); ?>/assets/images/avatars/user-03.jpg" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0">John Doe</a></li>
                                    <li>December 29, 2017</li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->
                </div> <!-- end featured__big -->

                <div class="featured__column featured__column--small">

                    <div class="entry" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/featured/featured-watch.jpg');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0">Management</a></span>

                            <h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar"  src="<?php echo get_template_directory_uri(); ?>/assets/images/avatars/user-03.jpg" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0">John Doe</a></li>
                                    <li>December 27, 2017</li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->

                    <div class="entry" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/featured/featured-beetle.jpg');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0">LifeStyle</a></span>

                            <h1><a href="#0" title="">Throwback To The Good Old Days.</a></h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar"  src="<?php echo get_template_directory_uri(); ?>/assets/images/avatars/user-03.jpg" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0">John Doe</a></li>
                                    <li>December 21, 2017</li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->

                </div> <!-- end featured__small -->
            </div> <!-- end featured -->

        </div> <!-- end col-full -->
    </div> <!-- end pageheader-content row -->

    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                ?>
                            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                                <div class="entry__thumb">
                                    <a href="single-standard.html" class="entry__thumb-link">
                                        <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/masonry/lamp-400.jpg"
                                              srcset="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/masonry/lamp-400.jpg 1x, images/thumbs/masonry/lamp-800.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="entry__text">
                                    <div class="entry__header">

                                        <div class="entry__date">
                                            <a href="single-standard.html">December 15, 2017</a>
                                        </div>
                                        <h1 class="entry__title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>

                                    </div>
                                    <div class="entry__excerpt">
                                        <p>
                                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                        </p>
                                    </div>
                                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Design</a>
                                <a href="category.html">Photography</a>
                            </span>
                                    </div>
                                </div>

                            </article> <!-- end article -->
                <?php
                        }
                    }
                ?>





            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->

<?php
    get_footer();