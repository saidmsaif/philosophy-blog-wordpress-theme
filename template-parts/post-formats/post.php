<article class="masonry__brick entry format-standard" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="single-standard.html" class="entry__thumb-link">
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