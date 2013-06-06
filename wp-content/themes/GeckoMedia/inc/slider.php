<!-- =================== slider ============= -->
		
		<div class="band slider">
			<div id="wrapper">
		    	<a class="nivo-prevNavEx nivo-prevNav"></a>
				<a class="nivo-nextNavEx nivo-nextNav"></a>
		 		<div class="slider-wrapper theme-default">
		            <div id="slider" class="nivoSlider">
                       <?php $id_silde  = get_option('geckomedia_id') ;
                            is_array(explode(',', $id_silde)) ? $id_silde_cut = explode(',', $id_silde) : $id_silde_cut = array(23,116,224) ;
                       ?>         
               <?php 
                  $i = 1;
                 $args = array(
                            'post_type' => array('post','page'),
                            'post__in' => $id_silde_cut,
                            'orderby' => 'name',
                            'order' => 'ASC'
              );
            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
            
              while ($my_query->have_posts()) : $my_query->the_post(); ?>
                               
		            	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                                <img src="<?php echo $url ?>"  alt="" title="#caption-<?=$i?>"/>
                        <?php  $i++; endwhile; }  wp_reset_query();  ?>
		            </div>
		                    
		           	<!-- Slide #1 caption (id="caption-1") -->
                             <?php 
                 $i = 1;
                 $args = array(
                            'post_type' => array('post','page'),
                            'post__in' => $id_silde_cut,
                            'orderby' => 'name',
                            'order' => 'ASC'
              );
            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
             // echo 'Latest Post in '.$taxonomy .' '.$term->name;
              while ($my_query->have_posts()) : $my_query->the_post(); ?>
		            <div class="nivo-html-caption" id="caption-<?=$i?>">
		                <div>
			                <h1><?php the_title();?></h1>
		                    <p><?php echo substr( get_the_excerpt(), 0, strrpos( substr( get_the_excerpt(), 0,390), ' ' ) ).' ...'; ?></p>
		                    <a href="<?php the_permalink();?>" class="buttonorange">Xem chi tiết</a>
		                </div>
		            </div>
		            
		  <?php $i++; endwhile; }   wp_reset_query(); ?>
                    
				</div>
		
		     </div>
		        
		</div>
               
	   
		<!-- =============== end slider ============= -->
		<?php // the_featured_posts_slider(); ?> 
<!--                <div class="band slider">
		<?php // include (ABSPATH . '/wp-content/plugins/wp-featured-content-slider/content-slider.php');?>
                 <div class="clear"></div>
                </div>-->