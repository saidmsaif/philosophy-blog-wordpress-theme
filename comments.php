<div class="comments-wrap">

    <div id="comments" class="row">
        <div class="col-full">

            <h3 class="h2">
                <?php
                    $philosophy_comments_number     =   get_comments_number();

                    if ($philosophy_comments_number <= 1) {
                        echo $philosophy_comments_number." ".__('Comment', 'philosophy');
                    } else {
                        echo $philosophy_comments_number." ".__('Comments', 'philosophy');
                    }
                ?>
            </h3>

            <!-- commentlist -->
            <ol class="commentlist">

                <?php
                    wp_list_comments();
                ?>

            </ol> <!-- end commentlist -->

            <div class="comments-pagination">
                <?php
                    the_comments_pagination(array(
                        'screen_reader_text'            =>  __('Pagination', 'philosophy'),
                        'prev_text'                     =>  '< '.__('Previus Comments', 'philosophy'),
                        'next_text'                     =>  '< '.__('Next Comments', 'philosophy'),
                    ));
                ?>
            </div>


            <!-- respond
            ================================================== -->
            <div class="respond">

                <h3 class="h2"><?php _e('Add Comment', 'philosophy'); ?></h3>

                <?php
                    comment_form();
                ?>

            </div> <!-- end respond -->

        </div> <!-- end col-full -->

    </div> <!-- end row comments -->
</div> <!-- end comments-wrap -->