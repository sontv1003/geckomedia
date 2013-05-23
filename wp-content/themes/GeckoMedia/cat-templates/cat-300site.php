<?php
/**
 *  Category Template: Cat-300site
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
                
                	<div class="sixteen columns">
                	
                		<ul class="port-nav">
	                   		<li><a href="<?php get_option('home');  ?>" class="active">All</a></li>
	                   		<li><a href="thiet-ke-web.html">Web Design</a></li>
	                   		<li><a href="thiet-ke-bo-thuong-hieu.html">Graphic Design</a></li>
	                   		<li><a href="domain-hosting.html">Domain & Hosting</a></li>
	                   		<li><a href="seo-adword.html">SEO & SEM</a></li>
	                   	</ul>
                                
	               		<div class="portfolio2columns">
	               			<ul>
                                                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                                                 <?php query_posts( array( 'cat' => 25, 'paged' => $paged,'showposts'=>8 ) ); ?>           

                                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                                        
                                                <li>
                                                    <a href="<?php the_permalink(); ?>">               								                	                               
                                                    <span class="port-zoom">+</span>
				                    <p class="port-title"><?php the_title(); ?></p>
				                    <div class="port-bgfade"></div>                     
				                     <?php thumb_img($post->ID,'600','409','100',get_the_title());  ?>			                    			                                      
				                    </a>
				                </li>

                                                <?php endwhile; else: ?>
                                                    <p class="error">No results found.</p>
                                                <?php endif; ?> 

                                               <!-- Start Pagination - WP-PageNavi -->
                                               
                                                <?php wp_pagenavi(); ?>
                                               
                                               <!-- End Pagination -->

                                            <?php wp_reset_query(); ?>
	               			</ul>
	               		</div><!--end port4columns-->
                        </div>
                    
                </div><!--end containerbox -->
            </div><!--end container -->       
  
                    
        </div><!--end main container-->


<?php get_footer();?>