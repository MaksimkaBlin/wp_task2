<?php foreach ($comments as $comment) : ?>
    <?php $comment_type = get_comment_type(); ?>
    <?php if ($comment_type == 'comment') { ?>
<li class="list-group-item">
    <div class="row">
        <div class="col-md-2 profile-thumb">
            <a href="#">
                <?php echo get_avatar( $id_or_email, $size, $default='', $alt, $args ); ?>
            </a>
        </div>
        <div class="col-md-10">
            <p><?php comment_text();?></p>
            <span class="date"><i class="fa fa-clock-o color-gray-light"></i><?php comment_date('n F Y'); ?></span>
        </div>
    </div>
</li>
    <?php } ?>
<?php endforeach; ?>


<?php if (comments_open()) :?>
<?php if (get_option('comment_registration') && !$user_ID) :?>
    <p>Вы должны <a href="/wp-login.php">представиться</a> для размещения комментариев.</p>
<?php else :?>


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

                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">


                        <label for="author">Name</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-7 col-md-offset-0">
                                <input class="form-control" type="text" name="author" id="author"
                                       value="<?php echo $comment_author; ?>" size="22" tabindex="1"  placeholder="Введите текст для поиска"/>
                            </div>
                        </div>
                        <label for="email">Email<span>*</span></label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-7 col-md-offset-0">
                                <input class="form-control" type="text" name="email" id="email"
                                       value="<?php echo $comment_author_email; ?>" size="22" tabindex="2"/>
                            </div>
                        </div>




                    <label for="comment">Message</label>
                    <div class="row margin-bottom-20">
                        <div class="col-md-11 col-md-offset-0">
                            <textarea class="form-control" rows="8" name="comment" id="comment"></textarea>
                        </div>
                    </div>

                    <p>
                        <input name="submit" class="btn btn-primary" type="submit" value="Send Message"/>
                        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>"/>
                    </p>


                </form>
            </div>
        </div>
    </div>


    <?php endif;  ?>
    <?php endif;  ?>







