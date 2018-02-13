<!-- Side Column -->
<div class="col-md-3">
    <!-- Blog Tags -->
    <div class="blog-tags">
          <ul class="blog-tags">

              <?php
              if ( function_exists('wp_tag_cloud'    ) ){
                  echo '<h2>Tags</h2>';
                  wp_tag_cloud('smallest=8&largest=22');
              }
              ?>

        </ul>
    </div>
    <!-- End Blog Tags -->
    <!-- Recent Posts -->
    <div class="recent-posts">
        <h3>Last news</h3>
            <ul class="posts-list margin-top-10">
            <li>
                <div class="recent-post">
                    <?php
                    $args = array(
                        'numberposts' => 6,
                        'orderby'          => 'post_date',
                        'order'            => 'DESC',
                        'post_status' => 'publish',

                    );

                    $result = wp_get_recent_posts($args);

                    foreach( $result as $p ){
                        ?>

                         <a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a><br />
                        <?php
                    }
                    ?>
                    <a href="">
                        <img class="pull-left" src="assets/img/blog/thumbs/thumb1.jpg" alt="thumb1">
                    </a>
                    <a href="#" class="posts-list-title">Sidebar post example</a>
                    <br>
                    <span class="recent-post-date">
                                                July 30, 2013
                                            </span>
                </div>
                <div class="clearfix"></div>
            </li>
            <li>
                <div class="recent-post">
                    <a href="">
                        <img class="pull-left" src="assets/img/blog/thumbs/thumb2.jpg" alt="thumb2">
                    </a>
                    <a href="#" class="posts-list-title">Sidebar post example</a>
                    <br>
                    <span class="recent-post-date">
                                                July 30, 2013
                                            </span>
                </div>
                <div class="clearfix"></div>
            </li>
            <li>
                <div class="recent-post">
                    <a href="">
                        <img class="pull-left" src="assets/img/blog/thumbs/thumb3.jpg" alt="thumb3">
                    </a>
                    <a href="#" class="posts-list-title">Sidebar post example</a>
                    <br>
                    <span class="recent-post-date">
                                                July 30, 2013
                                            </span>
                </div>
                <div class="clearfix"></div>
            </li>
            <li>
                <div class="recent-post">
                    <a href="">
                        <img class="pull-left" src="assets/img/blog/thumbs/thumb4.jpg" alt="thumb4">
                    </a>
                    <a href="#" class="posts-list-title">Sidebar post example</a>
                    <br>
                    <span class="recent-post-date">
                                                July 30, 2013
                                            </span>
                </div>
                <div class="clearfix"></div>
            </li>
        </ul>
    </div>
    <!-- End Recent Posts -->
</div>
<!-- End Side Column -->