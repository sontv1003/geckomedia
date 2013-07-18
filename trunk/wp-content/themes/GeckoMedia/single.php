<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?>
<?php
get_header();
include (TEMPLATEPATH . '/inc/site_option.php');
include (TEMPLATEPATH . '/inc/page_intro.php');
?>
<div class="maincontainer"><!-- start main container -->

    <div class="container">
        <div class="containerbox">

            <div class="twelve columns"><!--12 columns-->

                <div class="blog-item">				                	
                    <?php if (have_posts()) : while (have_posts()): the_post(); ?>         		
                            <h4><?php the_title(); ?>.</h4>
                            <h5><span class="by">By </span><?php the_author(); ?></h5>
                            <ul> 
                                <li class="date"><?php the_time(' j F Y'); ?></li>
                                <li class="view"><?php echo getPostViews(get_the_ID()); ?></li>
                                <li class="comment"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></li>
                                <li class="tag"><?php the_tags('', ' - ', ' '); ?></li>
                            </ul>             		
                            <?php
                            global $post;
                            $category_detail = get_the_category($post->ID);
                            ?>
                            <?php if (!in_array($category_detail[0]->term_id, array(21, 25))): ?>
                                <div class="blog-img">
                                    <?php thumb_img($post->ID, '940', '390', '100', get_the_title()); ?>
                                </div>
                                <div class="shadow-big"></div> 
                            <?php endif; ?>


                            <?php setPostViews(get_the_ID()); ?> 
                            <?php the_content() ?>
                        <?php endwhile;
                    else : ?>
                        <p> không Có nội dung </p>
<?php endif; ?>

                    <div class="lines"></div>

                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=542409615782070";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    <fb:comments href="<?php echo get_permalink(); ?>" width="700" num_posts="10"></fb:comments>
<?php //comments_template('', true); ?>
                </div><!--end blog-item-->  

            </div><!--end 12 columns-->


<?php get_sidebar(); ?>	

        </div><!--end containerbox -->
    </div><!--end container -->


</div><!--end main container-->
<?php get_footer() ?>