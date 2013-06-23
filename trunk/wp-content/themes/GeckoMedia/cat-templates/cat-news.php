<?php
/**
 *  Category Template: Cat-news
 */
?>
<?php 
get_header();
include (TEMPLATEPATH . '/inc/site_option.php');
include (TEMPLATEPATH . '/inc/page_intro_news.php');
?>
<div class="maincontainer"><!-- start main container -->
    <div class="container">
        <div class="containerbox">
            <div class="twelve columns"><!--12 columns-->
             
               <?php  
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                <?php $news = new WP_Query('showposts=4&cat=22&paged='.$paged); ?>  
                <?php while ($news->have_posts()) : $news->the_post(); ?>
                                <div class="blog-item">				                	

                                              <h4><?php the_title(); ?></h4>
                                              <h5><span class="by">By: </span><?php the_author();?></h5>
                                              <ul>
                                                  <li class="date"> <?php the_time('F jS, Y');?></li>
                                                  <li class="view"><?php echo getPostViews(get_the_ID()); ?></li>
                                                      <li class="comment"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></li>
                                                      <li class="tag"><?php the_tags('','-',''); ?></li>
                                              </ul>             		


                                              <div class="blog-img">
                                                      <?php thumb_img($post->ID, '940', '390', '100', get_the_title()); ?>
                                              </div>
                                              <div class="shadow-big"></div> 

                                              <p><?php echo substr( get_the_excerpt(), 0, strrpos( substr( get_the_excerpt(), 0,990), ' ' ) ).' ...'; ?></p>  
                                                  <a href="<?php the_permalink();?>"><button class="greybutton">read more</button></a>

                                              <div class="lines"></div>

                            </div>
                  <?php endwhile;?> 

              <!-- Start Pagination - WP-PageNavi -->
              <?php
                if(function_exists('wp_pagenavi')){
                  wp_pagenavi(array('query' =>$news));
                } ?>
              <!-- End Pagination -->   
             <?php wp_reset_query(); ?>	 
         </div> <!--end 12 columns-->
         
                <?php get_sidebar();?>
           
        </div><!--end containerbox--> 
    </div><!--end container--> 
</div><!--end main container--> 


<?php get_footer(); ?>