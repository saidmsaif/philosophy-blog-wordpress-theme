<article class="masonry__brick entry format-video" data-aos="fade-up">

    <div class="entry__thumb video-image">
        <a href="https://player.vimeo.com/video/117310401?color=01aef0&title=0&byline=0&portrait=0" data-lity>
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