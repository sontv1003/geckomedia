<!--page intro-->

		<div class="band pageintro">
		
			<div class="pageintro-content">
			
				<div class="container">
		
					<div class="thirteen columns">		
                                            <?php if(is_category()):?>
                                            <?php 
                                                global $wp_query;
                                                $tag = $wp_query->get_queried_object();                                                
                                            ?>
                                                <h1><?php echo get_field('heading_banner', 'category_'.$tag->term_id); ?></h1>
                                                <h4><?php echo get_field('text_banner', 'category_'.$tag->term_id); ?></h4>						
                                            
                                            <?php else: ?>
                                            
                                                <h1><?php echo get_field('heading_banner'); ?></h1>
                                                <h4><?php echo get_field('text_banner'); ?></h4>
                                            
                                            <?php endif; ?>
					</div>
					
					<div class="three columns">
						 <?php get_search_form();?>
					</div>
				
				</div>
				
		    </div>    
		</div>		
		<!--end page intro-->
		
		
		<div class="shadow"><!--shadow-->
			<div class="container">
				<div class="portmenu-shadow"></div>
			</div>
        </div><!--end shadow-->