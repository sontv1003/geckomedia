<?php
/*
 * Template Name: page-support
 */
?>
<?php 
include (TEMPLATEPATH . '/inc/site_option.php');
get_header();
include (TEMPLATEPATH . '/inc/page_intro.php');
?>
<div class="maincontainer"><!-- start main container -->
        
            <div class="container">
                <div class="containerbox">
                	<div class="aboutus"><!--services content-->
                            <?php if(have_posts()) : while (have_posts()): the_post();  ?>
                            <?php  the_content() ?>
                            <?php  endwhile;  else : ?>
                            <p> Khong thay </p>
                            <?php endif; ?>
                    </div><!-- end services -->
                    
                </div><!--end containerbox -->
            </div><!--end container -->
            
            
            <!--end container -->         
            
            
            
            <!--end container -->

        
        </div><!--end main container-->

<?php get_footer();?>