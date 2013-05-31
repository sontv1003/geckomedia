<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
    <div class="clear"></div>
<?php if ( have_comments() ) : ?>
            <h1 class="heading"><span><?php comments_popup_link('No Comments', 'Comment (1)', 'Comments (%)', 'comments-link', ''); ?></span></h1>
            <ul class="comments">
                <?php wp_list_comments( array( 'callback' => 'gecko_media_comment' ) );?>
            <?php //wp_list_comments('type=comment&callback=bcd_comment'); ?>
            </ul>
         <?php else : // this is displayed if there are no comments so far ?>
            <?php if ( comments_open() ) : ?>
                <!-- If comments are open, but there are no comments. -->
             <?php else : // comments are closed ?>
                <!-- If comments are closed. -->
                <p class="nocomments">Comments đã đóng.</p>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ( comments_open() ) : ?>
        
                
        <div class="leavemessage">
                <h1 class="heading"><span><?php comment_form_title( 'Để lại comment của bạn', 'Trả lời cho bài %s' ); ?></span></h1>
                <div class="cancel-comment-reply">
                    <small><?php cancel_comment_reply_link(); ?></small>
                </div>
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="sendmessage">

                    <input type="text" name="author" id="author" class="sendmessage-inputbox" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
                    <input type="text" name="email" id="email"   class="sendmessage-inputbox" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<!--                    <textarea name="message" id="message"></textarea>-->
                    <textarea name="comment" id="comment"></textarea>
                   
                    <input name="submit" class="greybutton" type="submit" id="submit" value="Submit" />
                    <?php comment_id_fields(); ?>
                    
                    <?php do_action('comment_form', $post->ID); ?>
                </form>
        </div>        
<?php endif; // if you delete this the sky will fall on your head ?>