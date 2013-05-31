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
                 		              		
                                    <h4><?php the_title(); ?>.</h4>
                                    <h5><span class="by">By </span> <?php the_author();?></h5>
                                    <ul>
                                            <li class="date"><?php the_time('F jS, Y');?></li>
                                            <li class="view">16 views</li>
                                            <li class="comment"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></li>
                                            <li class="tag"><?php the_tags('','-',' '); ?></li>
                                    </ul>             		


                                    <div class="blog-img">
                                            <?php thumb_img($post->ID, '940', '390', '100', get_the_title()); ?>
                                    </div>
                                    <div class="shadow-big"></div> 

                                    <?php if(have_posts()) : while (have_posts()): the_post();  ?>
                                    <?php  the_content() ?>
                                    <?php  endwhile;  else : ?>
                                    <p> không Có nội dung </p>
                                    <?php endif; ?>

                                    <div class="lines"></div>


                                    <?php comments_template( '', true ); ?>
                            </div><!--end blog-item-->  
               							                 
    			</div><!--end 12 columns-->
		
		
				<?php get_sidebar();?>	
                
                </div><!--end containerbox -->
            </div><!--end container -->

        
        </div><!--end main container-->