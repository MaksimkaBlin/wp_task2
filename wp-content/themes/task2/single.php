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
                                            <img class="pull-left" src="assets/img/profiles/87.jpg" alt="image1">
                                        </div>
                                        <div class="col-md-10">
                                            <label>John Doe</label>
                                            <p>Lorem ipsum dolor sit amet, in pri offendit ocurreret. Vix sumo ferri an. pfs adodio fugit delenit ut qui. Omittam suscipiantur ex vel,ex audiam intellegat gfIn labitur discere eos, nam an feugiat
                                                voluptua.</p>
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
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2 profile-thumb">
                                                <a href="#">
                                                    <img class="media-object" src="assets/img/profiles/99.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-10">
                                                <h4>Great Article</h4>
                                                <p>Donec id erum quidem rerumd facilis est et expedita distinctio lorem ipsum dolorlit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                    fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..</p>
                                                <span class="date">
                                                                <i class="fa fa-clock-o color-gray-light"></i>5 hours ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2 profile-thumb">
                                                <a href="#">
                                                    <img class="media-object" src="assets/img/profiles/53.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-10">
                                                <h4>A quick question</h4>
                                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                <p>Donec id erum quidem rerumd facilis est et expedita distinctio lorem ipsum dolorlit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                    fermentum massa justo sit amet risus. Etiam porta sem malesuada magna.</p>
                                                <span class="date">
                                                                <i class="fa fa-clock-o color-gray-light"></i>12 May 2013</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2 profile-thumb">
                                                <a href="#">
                                                    <img class="media-object" src="assets/img/profiles/37.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-10">
                                                <h4>Thank you!</h4>
                                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                <span class="date">
                                                                <i class="fa fa-clock-o color-gray-light"></i>10 May 2013</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Comment Form -->
                                    <li class="list-group-item">
                                        <div class="blog-comment-form">
                                            <div class="row margin-top-20">
                                                <div class="col-md-12">
                                                    <div class="pull-left">
                                                        <h3>Leave a Comment</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row margin-top-20">
                                                <div class="col-md-12">
                                                    <form>
                                                        <label>Name</label>
                                                        <div class="row margin-bottom-20">
                                                            <div class="col-md-7 col-md-offset-0">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <label>Email
                                                            <span>*</span>
                                                        </label>
                                                        <div class="row margin-bottom-20">
                                                            <div class="col-md-7 col-md-offset-0">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <label>Message</label>
                                                        <div class="row margin-bottom-20">
                                                            <div class="col-md-11 col-md-offset-0">
                                                                <textarea class="form-control" rows="8"></textarea>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <button class="btn btn-primary" type="submit">Send Message</button>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
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