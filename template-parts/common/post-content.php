<div class="entry__text">
    <div class="entry__header">

        <div class="entry__date">
            <a href="single-standard.html">
                <?php
                    echo get_the_date();
                ?>
            </a>
        </div>
        <h1 class="entry__title">
            <a href="single-standard.html">
                <?php
                    the_title();
                ?>
            </a>
        </h1>

    </div>
    <div class="entry__excerpt">
        <?php
            the_excerpt();
        ?>
    </div>
    <div class="entry__meta">
        <span class="entry__meta-links">
            <a href="category.html">Design</a>
            <a href="category.html">Photography</a>
        </span>
    </div>
</div>