
    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3>
                    <?php
                        _e('Popular Posts', 'philosophy');
                    ?>
                </h3>

                <div class="block-1-2 block-m-full popular__posts">

                    <?php
                        $philosophy_popular_posts = new WP_Query(array(
                            'posts_per_page'        =>  6,
                            'ignore_sticky_post'    =>  1,
                            'orderby'               =>  'comment_count'
                        ));

                        while($philosophy_popular_posts->have_posts()) {
                            $philosophy_popular_posts -> the_post();
                    ?>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <?php the_post_thumbnail(); ?>
                        </a>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span><?php _e('By', 'philosophy'); ?></span>
                                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
                            </span>
                            <span class="popular__date">
                                <span><?php _e('on', 'philosophy'); ?></span>
                                <time datetime="2017-12-19"><?php echo get_the_date(); ?></time>
                            </span>
                        </section>
                    </article>
                    <?php
                        }
                        wp_reset_query();
                    ?>
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->

            <?php
                if (is_active_sidebar('popular-post-sidebar-widget')) {
                    dynamic_sidebar('popular-post-sidebar-widget');
            ?>
            <ul class="about__social">
                <?php
                    $philosophy_pp_sidebar_facebook = get_field('philosophy_facebook');
                    $philosophy_pp_sidebar_twitter = get_field('philosophy_twitter');
                    $philosophy_pp_sidebar_instagram = get_field('philosophy_instagram');
                    $philosophy_pp_sidebar_pinterest = get_field('philosophy_pinterest');

                    if ($philosophy_pp_sidebar_facebook) :
                ?>
                    <li>
                        <a href="<?php echo esc_url($philosophy_pp_sidebar_facebook); ?>">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                <?php
                    endif;

                    if ($philosophy_pp_sidebar_twitter) :
                ?>
                <li>
                    <a href="<?php echo esc_url($philosophy_pp_sidebar_twitter); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <?php
                    endif;

                    if ($philosophy_pp_sidebar_instagram) :
                ?>
                <li>
                    <a href="<?php echo esc_url($philosophy_pp_sidebar_instagram); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <?php
                    endif;

                    if ($philosophy_pp_sidebar_pinterest) :
                ?>
                <li>
                    <a href="<?php echo esc_url($philosophy_pp_sidebar_pinterest); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                </li>

                <?php
                    endif;
                ?>
            </ul> <!-- end header__social -->
            <?php
                }
            ?>


        </div> <!-- end row -->

        <div class="row bottom tags-wrap">
            <div class="col-full tags">
                <h3>Tags</h3>

                <div class="tagcloud">
                    <?php
                        the_tags('', '', '');
                    ?>
                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">

                <div class="col-two md-four mob-full s-footer__sitelinks">

                    <h4><?php _e('Quick Links', 'philosophy'); ?></h4>

                    <?php
                        wp_nav_menu(array(
                            'theme-location'        =>  'footer_left_links',
                            'menu_id'               =>  'footer_left_links',
                            'menu_class'            =>  's-footer__linklist',
                        ))
                    ?>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">

                    <h4>Archives</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">January 2018</a></li>
                        <li><a href="#0">December 2017</a></li>
                        <li><a href="#0">November 2017</a></li>
                        <li><a href="#0">October 2017</a></li>
                        <li><a href="#0">September 2017</a></li>
                        <li><a href="#0">August 2017</a></li>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">

                    <h4>Social</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Instagram</a></li>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Pinterest</a></li>
                        <li><a href="#0">Google+</a></li>
                        <li><a href="#0">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">

                    <h4>Our Newsletter</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">

                            <input type="submit" name="subscribe" value="Send">

                            <label for="mc-email" class="subscribe-message"></label>

                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Copyright Philosophy 2018</span>
                        <span>Site Template by <a href="https://colorlib.com/">Colorlib</a></span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->

    <?php wp_footer(); ?>
</body>
</html>