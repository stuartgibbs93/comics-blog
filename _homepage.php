<?php
/*
 Template Name: Homepage
 */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="jumbotron jumbotron-fluid">
                <div class="overlay">
                    <div id="top-bar" class="row">
                        <div class="mx-auto">
                            <!-- <p class="text-center">Site Announcment</p> -->
                        </div>
                    </div>
                    <div class="row pt-3 container-fluid site-header mx-auto" id="masthead">
                        <div class="col-12 d-sm-block d-lg-none ">
                            <button class="navbar-toggler navbar-light my-4 float-right" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>

                        <nav id="site-navigation" class="main-navigation navbar navbar-nav col-12">
                            <div id="navbarToggleExternalContent" class="collapse d-lg-block">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                    'depth' => 2,
                                    'menu_class' => 'nav',
                                    
                                ) );
                                ?>
                            </div>
                        </nav><!-- #site-navigation -->
                    </div>
                
                    <div class="container-fluid">
                        <!-- <h1 class="display-4"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1> -->
                            <div class="site-branding mx-auto text-center col-4 mt-5">
                                <img src="http://localhost:8888/marvelcomicsfandom/wp-content/uploads/2020/07/placeholder_logo.png">
                            </div><!-- .site-branding -->
                            <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-12 d-flex flex-column align-items-center justify-content-center px-5" id="about">
                        <h2 class="text-center">About</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi eros, volutpat in mi id, interdum pellentesque odio. Praesent ut sollicitudin augue. Sed vitae lacus mi. Sed semper metus at lacus malesuada faucibus. Phasellus fermentum consequat euismod. In ut elit dui. Phasellus ac vehicula mi, vel sollicitudin ex. Phasellus egestas blandit nulla id efficitur. Praesent vehicula euismod est in elementum. Donec posuere neque faucibus quam congue eleifend vel non dolor. Integer sit amet orci et eros tristique maximus. Suspendisse potenti.</p>

                    </div>
                    <div class="col-lg-6 col-12" id="comics-background">
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>









































            <div class="container-fluid d-flex flex-column align-items-center justify-content-center" id="reading-orders">
                 <div class="row my-5">
                    <h2>Reading Orders</h2>
                 </div>
                 <div class="row carousel mb-5 d-flex justify-content-center">

                 <!--Define our WP Query Parameters-->
                    <?php $the_query = new WP_Query( array( 'category_name' => 'reading-orders' )); ?>
                            
                    <!-- Start our WP Query -->
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            <div class="carousel-cell">
                                <div class="card post col-md-3 col-12 p-0 mx-4 my-3">
                                    
                                    <div class="post-image">
                                        <?php $cardImg = the_post_thumbnail(); ?>
                                        <?php if ($cardImg == "") {
                                            $cardImg[0] = "http://localhost:8888/marvelcomicsfandom/wp-content/uploads/2020/07/marvel_banner_1-scaled.jpeg"; } ?>
                                        
                                    </div>
                                    <div class="card-body">
                                        <h3 class="text-left card-title post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                        <p><?php the_excerpt(__('(more…)')); ?></p>
                                    </div>
                                </div> 
                            </div>

                        <!-- Repeat the process and reset once it hits the limit -->
                        <?php endwhile; wp_reset_postdata(); ?>
                </div>

            </div>
           




           












            <div class="main-carousel">
                <div class="carousel-cell">...</div>
                <div class="carousel-cell">...</div>
                <div class="carousel-cell">...</div>
            </div>







































            <div class="container-fluid d-flex flex-column align-items-center justify-content-center" id="recommendations">
            <div class="row my-5">
                    <h2>Recommendations</h2>
                 </div>
                 <div class="row mb-5 d-flex justify-content-center">

                 <!--Define our WP Query Parameters-->
                    <?php $the_query = new WP_Query( array( 'category_name' => 'recommendations' )); ?>
                            
                    <!-- Start our WP Query -->
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            
                            <div class="card post col-md-3 col-12 p-0 mx-4 my-3">
                                
                                <div class="post-image">
                                    <?php $cardImg = the_post_thumbnail(); ?>
                                    <?php if ($cardImg == "") {
                                        $cardImg[0] = "http://localhost:8888/marvelcomicsfandom/wp-content/uploads/2020/07/marvel_banner_1-scaled.jpeg"; } ?>
                                    
                                </div>
                                <div class="card-body">
                                    <h3 class="text-left card-title post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_excerpt(__('(more…)')); ?></p>
                                </div>
                            </div> 

                        <!-- Repeat the process and reset once it hits the limit -->
                        <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="container-fluid d-flex flex-column align-items-center justify-content-center" id="collection">
            <div class="row my-5">
                    <h2>Collection</h2>
                 </div>
                 <div class="row mb-5 d-flex justify-content-center">

                 <!--Define our WP Query Parameters-->
                    <?php $the_query = new WP_Query( array( 'category_name' => 'collection' )); ?>
                            
                    <!-- Start our WP Query -->
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            
                            <div class="card post col-md-3 col-12 p-0 mx-4 my-3">
                                
                                <div class="post-image">
                                    <?php $cardImg = the_post_thumbnail(); ?>
                                    <?php if ($cardImg == "") {
                                        $cardImg[0] = "http://localhost:8888/marvelcomicsfandom/wp-content/uploads/2020/07/marvel_banner_1-scaled.jpeg"; } ?>
                                    
                                </div>
                                <div class="card-body">
                                    <h3 class="text-left card-title post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_excerpt(__('(more…)')); ?></p>
                                </div>
                            </div> 

                        <!-- Repeat the process and reset once it hits the limit -->
                        <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

                    

        </main><!-- #main -->
    </div>

<?php

get_footer();
