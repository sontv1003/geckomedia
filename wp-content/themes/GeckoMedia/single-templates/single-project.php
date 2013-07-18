<?php
/*
* Template Name Posts: Single-project
*/
?>
<?php 
get_header();
include (TEMPLATEPATH . '/inc/site_option.php');
include (TEMPLATEPATH . '/inc/page_intro.php');
?>
<div class="maincontainer"><!-- start main container -->
        
            <div class="container">
                <div class="containerbox nomarginbottom">
                
                	<div class="sixteen columns">
                	
                		<div class="portfolio">	
                	
	                 		<div class="port-nav">
	                 			<ul>
	                 				<li class="prev"></li>
	                 				<li class="grid"></li>
	                 				<li class="next"></li>
	                 			</ul>
	                 		</div>
	                 		
                                    <h4><?php the_title(); ?>.</h4>                 			
	               		</div>
					
					</div>
                    
                </div><!--end containerbox -->
            </div><!--end container -->
            
            
            <div class="container">
                <div class="containerbox nomargin">
                              	
            		<div class="three columns">
	            		<h5>Project Descriptions</h5>
	            		
	            		<ul class="port-list">
							<li>Business</li>
							<li>Responsive Design</li>
							<li>Clean Portfolio</li>
							<li>Muti-Purpose</li>
							<li>WordPress</li>
							<li>jQuery</li>
							<li>PHP</li>
							<li>Best Practice</li>
				</ul>
						
                                                    <a href="<?php the_field('link_launch_site'); ?>" class="greybutton">launch site</a>
	                </div>
	                
	               	<div class="thirteen columns">
	            		<?php if(have_posts()) : while (have_posts()): the_post();  ?>
                            <?php  the_content() ?>
                            <?php  endwhile;  else : ?>
                            <p> không Có nội dung </p>
                            <?php endif; ?>
	                </div>
                    
                </div><!--end containerbox -->
            </div><!--end container -->
            
            
            <div class="container">
                <div class="containerbox">
                
                	<div class="sixteen columns">
                	
                		<h1 class="heading"><span>Dự án Mới</span></h1>
                                <?php include (TEMPLATEPATH . '/inc/query_du_an_moi.php'); ?>
                                </div>
                    
                </div><!--end containerbox -->
            </div><!--end container -->              
  
                    
        </div><!--end main container-->
         
<?php get_footer(); ?>