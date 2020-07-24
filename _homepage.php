<?php
/*
 Template Name: Homepage
 */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="jumbotron jumbotron-fluid">
                <div class="container-fluid">
                    <!-- <h1 class="display-4"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1> -->
                        <div class="site-branding mx-auto text-center col-4 mt-5">
				            <img src="http://localhost:8888/marvelcomicsfandom/wp-content/uploads/2020/07/placeholder_logo.png">
			            </div><!-- .site-branding -->
                        <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
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
                 <div class="row mt-5">
                    <h2>Reading Orders</h2>
                 </div>
                 <div class="row d-flex justify-content-center">

                 <!--Define our WP Query Parameters-->
                    <?php $the_query = new WP_Query( array( 'category_name' => 'reading-orders' )); ?>
                            
                    <!-- Start our WP Query -->
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            
                            <div class="card post col-md-3 col-12 p-0 mx-4 my-5">
                                <!-- <img class="card-img-top" src="http://localhost:8888/marvelcomicsfandom/wp-content/uploads/2020/07/marvel_banner_1-scaled.jpeg" alt=""> -->
                                
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










                    

                   <!-- <div class="card post col-md-3 col-12 p-0 mx-4 my-5">
                        <img class="card-img-top" src="http://localhost:8888/marvelcomicsfandom/wp-content/uploads/2020/07/marvel_banner_1-scaled.jpeg" alt="">
                        <div class="card-body">
                            <h3 class="text-left card-title">Reading Orders</h3>
                            <p class="text-left card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi eros, volutpat in mi id, interdum pellentesque odio. Praesent ut sollicitudin augue. Sed vitae lacus mi. Sed semper metus at lacus malesuada faucibus. Phasellus fermentum consequat euismod&hellip; </p>
                        </div>
                    </div>

                    <div class="card post col-md-3 col-12 p-0 mx-4 my-5">
                        <img class="card-img-top" src="http://localhost:8888/marvelcomicsfandom/wp-content/uploads/2020/07/marvel_banner_1-scaled.jpeg" alt="">
                        <div class="card-body">
                            <h3 class="text-left card-title">Reading Orders</h3>
                            <p class="text-left card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi eros, volutpat in mi id, interdum pellentesque odio. Praesent ut sollicitudin augue. Sed vitae lacus mi. Sed semper metus at lacus malesuada faucibus. Phasellus fermentum consequat euismod&hellip; </p>
                        </div>
                    </div>
                </div>  -->

                
            </div>
           
            <div class="container-fluid d-flex flex-column align-items-center justify-content-center" id="recommendations">
                <div class="row">
                    <div class="col-12 py-4 px-5 mt-5">
                    <h2 class="text-center">Recommendations</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi eros, volutpat in mi id, interdum pellentesque odio. Praesent ut sollicitudin augue. Sed vitae lacus mi. Sed semper metus at lacus malesuada faucibus. Phasellus fermentum consequat euismod. In ut elit dui. Phasellus ac vehicula mi, vel sollicitudin ex. Phasellus egestas blandit nulla id efficitur. Praesent vehicula euismod est in elementum. Donec posuere neque faucibus quam congue eleifend vel non dolor. Integer sit amet orci et eros tristique maximus. Suspendisse potenti.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex flex-column align-items-center justify-content-center" id="collection">
                <div class="row">
                    <div class="col-12 py-4 px-5 mt-5">
                    <h2 class="text-center">Collection</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi eros, volutpat in mi id, interdum pellentesque odio. Praesent ut sollicitudin augue. Sed vitae lacus mi. Sed semper metus at lacus malesuada faucibus. Phasellus fermentum consequat euismod. In ut elit dui. Phasellus ac vehicula mi, vel sollicitudin ex. Phasellus egestas blandit nulla id efficitur. Praesent vehicula euismod est in elementum. Donec posuere neque faucibus quam congue eleifend vel non dolor. Integer sit amet orci et eros tristique maximus. Suspendisse potenti.</p>
                    </div>
                </div>
            </div>

                    

        </main><!-- #main -->
    </div>

<?php

get_footer();
