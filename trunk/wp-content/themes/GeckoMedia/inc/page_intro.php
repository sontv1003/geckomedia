<!--page intro-->
		
		<div class="band pageintro">
		
			<div class="pageintro-content">
			
				<div class="container">
		
					<div class="thirteen columns">					
						<h1><?php echo get_post_meta($post->ID,'h1_band',true); ?></h1>
						<h4><?php echo get_post_meta($post->ID,'h4_band',true); ?></h4>						
					</div>
					
					<div class="three columns">
						<form name="search" method="post" action="#">
							<input type="text" id="search">
							<input type="submit" name="button" id="button" value="">
						</form>
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