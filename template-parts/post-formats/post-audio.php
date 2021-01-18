<?php
    $philosophy_audio_post = get_field('source_link');
    if (function_exists('the_field')) :
?>

<article class="masonry__brick entry format-audio" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="single-audio.html" class="entry__thumb-link">
            <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                }
            ?>
        </a>
        <?php if ($philosophy_audio_post) : ?>
        <div class="audio-wrap">
            <audio id="player" src="<?php echo esc_url($philosophy_audio_post) ?>" width="100%" height="42" controls="controls"></audio>
        </div>
        <?php endif; ?>
    </div>

    <?php
        get_template_part('template-parts/common/post-content');
    ?>

</article> <!-- end article -->

<?php
    endif;