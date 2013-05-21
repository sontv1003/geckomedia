<?php 
include (TEMPLATEPATH . '/inc/site_option.php');
get_header();
?>
<!--page intro-->
		
		<div class="band pageintro">
		
			<div class="pageintro-content">
			
				<div class="container">
		
					<div class="thirteen columns">					
						<h1>404</h1>
						<h4>404 page not found</h4>						
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
        
    <div class="container">
                <div class="containerbox">

                    <div class="sixteen columns">                    
                        <div class="errorpage">
                            <h3>Oops! This page might be no longer available or never existed.<br />
                            You can try to search for some content above</h3>

                            <div class="errorpage-number">
                            4<span class="green">0</span>4	
                            </div>

                            <h3>Or you can view our <a href="#">portfolio</a>, Even read the <a href="#">blog</a></h3>
                        </div>                   
                    </div>

                </div><!--end containerbox -->
            </div><!--end container -->
     <?php get_footer();?>