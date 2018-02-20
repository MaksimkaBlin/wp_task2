<?php get_header(); ?>

    <!-- === BEGIN CONTENT === -->

    <div id="slideshow" class="bottom-border-shadow">
        <div class="container no-padding background-white bottom-border">
            <div class="row">
                <!-- Carousel Slideshow -->
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <div class="clearfix"></div>
                    <div class="carousel-inner">
                        <?php echo do_shortcode('[metaslider id="149"]'); ?>
                    </div>
                    </div>
                </div>
        </div>
    </div>

    <div id="icons" class="bottom-border-shadow">

        <div class="container background-grey bottom-border">

            <div class="row padding-vert-60">
                <!-- Icons -->
                <?php if ( is_active_sidebar( 'true_index' ) ) : ?>
                <div class="col-md-4 text-center">
                        <div id="true-side" class="sidebar">
                            <?php dynamic_sidebar( 'true_index' ); ?>
                        </div>
                </div>
                    <div class="col-md-4 text-center">
                        <div id="true-side" class="sidebar">
                            <?php dynamic_sidebar( 'true_index' ); ?>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div id="true-side" class="sidebar">
                            <?php dynamic_sidebar( 'true_index' ); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- End Icons -->
            </div>
        </div>
    </div>
    <div id="content" class="bottom-border-shadow">
        <div class="container background-white bottom-border">
            <div class="row margin-vert-30">
                <!-- Main Text -->
<?php if (have_posts()) :
    $args = array( 'posts_per_page' => 1, 'order' => 'DESC' );
    query_posts($args);
    while (have_posts()) : the_post(); ?>
                <div class="col-md-6">
                    <h2><?php the_title();?><a href="<?php the_permalink() ?>"></h2>
                    <?php the_content(); ?>
                </div>
                
    <?php endwhile; wp_reset_query(); ?>
<?php else : echo wpautop( 'Постов для вывода не найдено.' );?>
<?php endif; ; ?>
            </div>
        </div>
    </div>
    <!-- Portfolio -->
    <div id="portfolio" class="bottom-border-shadow">
        <div class="container bottom-border">
            <div class="row padding-top-40">
                <ul class="portfolio-group">
                    <?php

                    $categories = get_categories( 'orderby=ID&hide_empty=0');
                    if($categories){
                        foreach ($categories as $cat){?>
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="<?php echo get_category_link( $cat->term_id );?>">
                                <figure class="animate fadeInLeft">

                                    <?php echo '<img src="http://task2.com/wp-content/uploads/2018/02/default_banner.jpg" />'; ?>
                                    <figcaption>
                                        <h3><?php   echo "<option value='{$cat->term_id}'>{$cat->name}</option>";?></h3>
                                    </figcaption>
                                </figure>
                                </a>
                            </li>
                            <?php
                        }
                    }else{?>
                        <li>
                            Рубрик не найдено.
                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->
<?php get_footer(); ?>