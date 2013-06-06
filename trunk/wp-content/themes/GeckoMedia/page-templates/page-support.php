<?php
/*
 * Template Name: page-support
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
                	<div class="aboutus"><!--services content-->
                            <div class="eight columns">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                                    <img src="<?php echo $url ?>" />
                                <div class="aboutus-shadow"></div>
                            </div>
                            <div class="eight columns">
                                <?php if(have_posts()) : while (have_posts()): the_post();  ?>
                                <h1 class="heading"><span><?php the_title();?></span></h1>
                                <?php  the_content() ?>
                                <?php  endwhile;  else : ?>
                                <p> không Có nội dung </p>
                                 <?php endif; ?>
                            </div>
                     </div><!-- end services -->
                    
                </div><!--end containerbox -->
            </div><!--end container -->
            
            
            <!--end container -->         
            
            
            
            <!--end container -->

        
        </div><!--end main container-->

<?php get_footer();?>