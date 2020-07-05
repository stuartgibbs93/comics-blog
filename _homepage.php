<?php
/*
 Template Name: Homepage
 */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container-fluid">
                <div class="row homepage-section">
                    <div class="col-12">
                        <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>

        </main><!-- #main -->
    </div>

<?php

get_footer();
