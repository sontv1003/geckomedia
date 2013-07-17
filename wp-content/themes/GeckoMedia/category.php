<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
             
               <?php  
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="blog-item">				                	

                                              <h4><?php the_title(); ?></h4>
                                              <h5><span class="by">By: </span><?php the_author();?></h5>
                                              <ul>
                                                  <li class="date"> <?php the_time('F jS, Y');?></li>
                                                  <li class="view"><?php the_meta();?> </li>
                                                      <li class="comment"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></li>
                                                      <li class="tag"><?php the_tags('','-',''); ?></li>
                                              </ul>        
                                              <div class="shadow-big"></div> 

                                              <p><?php echo substr( get_the_excerpt(), 0, strrpos( substr( get_the_excerpt(), 0,990), ' ' ) ).' ...'; ?></p>  
                                                  <a href="<?php the_permalink();?>"><button class="greybutton">read more</button></a>

                                              <div class="lines"></div>

                            </div>
                  <?php endwhile;  endif; ?> 

              <!-- Start Pagination - WP-PageNavi -->
              <?php wp_pagenavi(); ?>
              <!-- End Pagination -->   
             <?php wp_reset_query(); ?>	 
         </div> <!--end 12 columns-->
         
                <?php get_sidebar();?>
           
        </div><!--end containerbox--> 
    </div><!--end container--> 
</div><!--end main container--> 


<?php get_footer(); ?>