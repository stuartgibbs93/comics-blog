<?php
/*
 Template Name: Homepage
 */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                </div>
            </div>
                    

        </main><!-- #main -->
    </div>

<?php

get_footer();
