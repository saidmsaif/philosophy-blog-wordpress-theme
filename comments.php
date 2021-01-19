<div class="comments-wrap">

    <div id="comments" class="row">
        <div class="col-full">

            <h3 class="h2">5 Comments</h3>

            <!-- commentlist -->
            <ol class="commentlist">

                <?php
                    wp_list_comments();
                ?>

            </ol> <!-- end commentlist -->


            <!-- respond
            ================================================== -->
            <div class="respond">

                <h3 class="h2">Add Comment</h3>

                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>

                        <div class="form-field">
                            <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                        </div>

                        <div class="form-field">
                            <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website" value="">
                        </div>

                        <div class="message form-field">
                            <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
                        </div>

                        <button type="submit" class="submit btn--primary btn--large full-width">Submit</button>

                    </fieldset>
                </form> <!-- end form -->

            </div> <!-- end respond -->

        </div> <!-- end col-full -->

    </div> <!-- end row comments -->
</div> <!-- end comments-wrap -->