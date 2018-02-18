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
                <div class="col-md-6">
                    <h2>Welcome to Habitat</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                        lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                        augue duis dolore te feugait nulla facilisi. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Curabitur eget nisl
                        a risus.</p>
                </div>
                <!-- End Main Text -->
                <div class="col-md-6">
                    <h3 class="padding-vert-10">Key Features</h3>
                    <p>Duis sit amet orci et lectus dictum auctor a nec enim. Donec suscipit fringilla elementum. Suspendisse nec justo ut felis ornare tincidunt vitae et lectus.</p>
                    <ul class="tick animate fadeInRight">
                        <li>Responsive Design</li>
                        <li>Built with LESS</li>
                        <li>Font Choosers</li>
                        <li>Replaceable Background Image</li>
                        <li>Custom Module Widths</li>
                        <li>All Module Extensions Included</li>
                    </ul>
                </div>
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