<article class="masonry__brick entry format-audio" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="single-audio.html" class="entry__thumb-link">
            <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                }
            ?>
        </a>
        <div class="audio-wrap">
            <audio id="player" src="media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>
        </div>
    </div>

    <?php
        get_template_part('template-parts/common/post-content');
    ?>

</article> <!-- end article -->