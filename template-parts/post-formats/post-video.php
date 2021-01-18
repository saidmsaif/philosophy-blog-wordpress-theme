<?php
    $philosophy_video_post = get_field('source_link');
    if (function_exists('the_field')) :
?>

<article class="masonry__brick entry format-video" data-aos="fade-up">

    <div class="entry__thumb video-image">
        <a href="<?php echo esc_url($philosophy_video_post) ?>?color=01aef0&title=0&byline=0&portrait=0" data-lity>
            <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                }
            ?>
        </a>
    </div>

    <?php
        get_template_part('template-parts/common/post-content');
    ?>

</article> <!-- end article -->

<?php
    endif;