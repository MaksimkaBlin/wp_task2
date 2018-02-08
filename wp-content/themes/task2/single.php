<?php get_header(); ?>
<!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <!-- Main Column -->
            <div class="col-md-9">
                <?php if (have_posts()) :?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="blog-post">
                    <div class="blog-item-header">
                        <h2>
                            <a href="#"><?php the_title();?></a>
                        </h2>
                        <!-- Date -->
                        <div class="blog-post-date">
                            <a href="#"><?php echo get_the_date('dS M, Y' ) ; ?></a>
                        </div>
                        <!-- End Date -->
                    </div>
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
                                <i class="fa fa-comments color-gray-light"></i><?php comments_popup_link('0','1','%'); ?>
                                Comments
                            </a>
                        </div>
                        <!-- End # of Comments -->
                    </div>
                    <div class="blog-item">
                        <div class="clearfix"></div>
                        <div class="blog-post-body row margin-top-15">

                            <?php the_content(); ?>
                        </div>
                        <div class="blog-item-footer">
                            <!-- About the Author -->
                            <div class="blog-author panel panel-default margin-bottom-30">
                                <div class="panel-heading">
                                    <h3>About the Author</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>
                                        </div>
                                        <div class="col-md-10">
                                            <label><?php the_author(); ?></label>
                                            <p>Аннота́ция (от лат. annotatio «замечание») или резюме́ (от фр. résumé «сокр
                                                ащённый») — краткое содержание книги, рукописи, монографии, статьи, пат
                                                ента, фильма, грампластинки или другого издания, а также его краткая хар
                                                актеристика. Аннотация показывает отличительные особенности.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End About the Author -->
                            <!-- Comments -->


                            <div class="blog-recent-comments panel panel-default margin-bottom-30">
                                <div class="panel-heading">
                                    <h3>Comments</h3>

                                </div>
                                <ul class="list-group">





                                    <!-- Comment Form -->
                                    <?php
                                    if (comments_open(get_the_ID())){
                                        comments_template('',true);
                                    }
                                    ?>
                                    <!-- End Comment Form -->
                                </ul>
                            </div>






                            <!-- End Comments -->
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : echo wpautop( 'Постов для вывода не найдено.' );?>
                <?php endif; ; ?>
                <!-- End Blog Post -->

            </div>
            <!-- End Main Column -->
            <!-- Side Column -->
            <?php get_sidebar();?>
            <!-- End Side Column -->
        </div>
    </div>
</div>
</div>
<!-- === END CONTENT === -->
<?php get_footer(); ?>