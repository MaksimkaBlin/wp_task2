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
                    <div class="popul">

                        <table>
                            <?php
                            $args = array( 'posts_per_page' => 5, 'order' => 'DESC' );
                            query_posts($args);
                            while ( have_posts() ) : the_post();
                                ?>
                                <tr><td><a onclick="return !window.open(this.href)" href="<?php the_permalink() ?>">
                                            <?php the_post_thumbnail('thumbnail'); ?></a><a href="<?php the_permalink() ?>">
                                            <?php the_title(); ?></br><?php the_date(); ?></a></td></tr>
                            <?php endwhile; wp_reset_query(); ?>
                        </table>
                    </div>

                </div>
                <div class="clearfix"></div>
            </li>



        </ul>
    </div>
    <!-- End Recent Posts -->
</div>
<!-- End Side Column -->