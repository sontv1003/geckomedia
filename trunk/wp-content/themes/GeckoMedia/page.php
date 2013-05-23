<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
            
             <div class="portfolio">
              <div class="port-nav">
                <ul>
                  <li class="prev"></li>
                  <li class="grid"></li>
                  <li class="next"></li>
                </ul>
              </div>
              <h4><?php the_field('tieu_de_bai_viet'); ?></h4>
              <div class="port-img"> <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                                    <img src="<?php echo $url ?>"  </div>
              </div>
               <div class="shadow-big"></div>
            </div>
            <!-- portfolio desc--> 
            <!-- portfolio desc-->
            <div class="twelve columns alpha">
                <!-- AddThis Button BEGIN --> 
                <?php if(have_posts()) : while (have_posts()): the_post();  ?>
                            <?php  the_content() ?>
                            <?php  endwhile;  else : ?>
                            <p> không Có nội dung </p>
                            <?php endif; ?>
                <!-- AddThis Button END -->
                
              </div>
              <div class="clear"></div>
            <div class="twelve columns alpha">
              <h1 class="heading"><span>Dự án Mới</span></h1>
              <?php include (TEMPLATEPATH . '/inc/query_du_an_moi.php'); ?>
            </div>
            <!--end related work--> 
            
          </div>
           
          <!--end 12 columns-->

            <?php get_sidebar();?>
        </div><!--end containerbox--> 
    </div><!--end container--> 
</div><!--end main container--> 


<?php get_footer(); ?>