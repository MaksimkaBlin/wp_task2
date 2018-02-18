<?php get_header(); ?>
    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <!-- Main Column -->
                <div class="col-md-9">
                    <!-- Blog Post -->

                    <!-- Blog Item Header -->
                    <?php if (have_posts()) :?>

                        <?php

$params = array(
    'paged' => get_query_var('paged'), // текущая страница
    'cat'=>get_query_var('cat'),
    'posts_per_page' => 3, // количество постов на странице
);
query_posts($params);

$wp_query->is_post = true;
$wp_query->is_index = false;

                        while (have_posts()) : the_post(); ?>

                            <div class="blog-post padding-bottom-20">
                                <div class="blog-item-header">
                                    <!-- Title -->
                                    <h2>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="clearfix"></div>
                                    <!-- End Title -->
                                    <!-- Date -->
                                    <div class="blog-post-date">
                                        <a href="#"><?php echo get_the_date('dS M, Y' ) ; ?></a>
                                    </div>
                                    <!-- End Date -->
                                </div>
                                <!-- End Blog Item Header -->
                                <!-- Blog Item Details -->
                                <div class="blog-post-details">
                                    <!-- Tags -->
                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                        <i class="fa fa-tag color-gray-light"></i>
                                        <?php
                                        $posttags = get_the_tags();
                                        if ($posttags){
                                            foreach ($posttags as $tag){
                                                $tag_links[] = '<a href = "' .get_tag_link($tag->term_id) . '">' .$tag->name . '</a>';
                                            }
                                            echo join(', ', $tag_links);
                                        }
                                        ?>
                                    </div>
                                    <!-- End Tags -->
                                    <!-- # of Comments -->
                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                        <a href="">
                                            <i class="fa fa-comments color-gray-light"></i>
                                            <?php comments_popup_link('0','1','%'); ?>
                                            Comments
                                        </a>
                                    </div>
                                    <!-- End # of Comments -->
                                </div>
                                <!-- End Blog Item Details -->
                                <!-- Blog Item Body -->
                                <div class="blog">
                                    <div class="clearfix"></div>
                                    <div class="blog-post-body row margin-top-15">

                                        <div class="col-md-7">
                                            <?php the_content();?>
                                            <!-- Read More -->
                                            <a href="<?php the_permalink();?>" class="btn btn-primary">
                                                Read More
                                                <i class="icon-chevron-right readmore-icon"></i>
                                            </a>
                                            <!-- End Read More -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Item Body -->
                            </div>
                            <!-- End Blog Item -->
                        <?php endwhile; ?>
                        <!-- Pagination -->

                        <ul class="pagination">
                            <?php wp_pagenavi(); ?>
                        </ul>
<!--                         End Pagination-->


                    <?php else : echo wpautop( 'Постов для вывода не найдено.' );?>
                    <?php endif ; ?>


                </div>
                <!-- End Main Column -->
                <?php get_sidebar();?>
            </div>
        </div>


    </div>
    <!-- === END CONTENT === -->
<?php get_footer(); ?>