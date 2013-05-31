<?php
/*
 * Template Name: page-contact
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
					<div class="map">
						<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=19+Phan+B%E1%BB%99i+Ch%C3%A2u,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;aq=2&amp;oq=19+phan&amp;sll=37.0625,-95.677068&amp;sspn=36.094886,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=19+Phan+B%E1%BB%99i+Ch%C3%A2u,+Tr%E1%BA%A7n+H%C6%B0ng+%C4%90%E1%BA%A1o,+Ho%C3%A0n+Ki%E1%BA%BFm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;z=14&amp;ll=21.026297,105.843809&amp;output=embed"></iframe>
					</div>
					<div class="shadow-big"></div>
			</div>
                    
                </div><!--end containerbox -->
            </div><!--end container -->
            
            
            <div class="container">
                <div class="containerbox">
                
                    <div class="twelve columns"><!--message form-->
					<h1 class="heading"><span>Gửi Thông Tin</span></h1>
                                        <?php if(have_posts()) : while (have_posts()): the_post();  ?>
                                        <?php  the_content() ?>
                                        <?php  endwhile;  else : ?>
                                        <p> Khong thay </p>
                                        <?php endif; ?>	
                    </div><!--end message form-->
				
                    <div class="four columns"><!--side bar-->
                            <h1 class="heading"><span>Liên hệ</span></h1>
                            <p class="spacetop"><b>Trụ sở chính:</b><br>Số 19 Phan Bội Châu - Hoàn Kiếm - Hà Nội 	</p>	
                            <p class="spacetop"><b>Chi nhánh Bắc Ninh:</b><br> Số 8, Phố Thịnh Lang, Đình Bảng, Từ Sơn, Bắc Ninh</p>

                            <h1 class="heading"><span>Hotline</span></h1>

                            <p class="spacetop">
                                    097.642.9086 ( Hotline )
                            </p>

                            <h1 class="heading"><span>e-mail</span></h1>

                            <p class="spacetop">
                                    <a href="#">info@geckomedia.vn</a><br />
                            </p>

                    </div><!--end side bar-->
                
                </div><!--end containerbox -->
            </div><!--end container -->         
            
            
            
            <div class="container">
                <div class="containerbox">
                
                	<div class="twelve columns"><!--social network-->
					<h1 class="heading"><span>Liên kết với chúng tôi</span></h1>
					
					<ul class="social">
						<li><a href="http://www.facebook.com/geckomedia" title="facebook" target="_blank"><span class="facebook"></span></a></li>
						<li><a href="http://www.twitter.com/geckomedia" title="twitter" target="_blank"><span class="twitter"></span></a></li>
						<li><a href="http://www.digg.com/geckomedia" title="digg" target="_blank"><span class="digg"></span></a></li>
						<li><a href="http://www.linkedin.com/geckomedia" title="linkedin" target="_blank"><span class="linkedin"></span></a></li>
						<li><a href="http://www.vimeo.com/geckomedia" title="vimeo" target="_blank"><span class="vimeo"></span></a></li>
						<li><a href="http://www.youtube.comgeckomedia/" title="youtube" target="_blank"><span class="youtube"></span></a></li>
						<li><a href="http://www.dribbble.com/geckomedia" title="dribble" target="_blank"><span class="dribble"></span></a></li>
						<li><a href="http://www.stumbleupon.com/geckomedia" title="stumbleupon" target="_blank"><span class="stumbleupon"></span></a></li>
						<li><a href="http://www.flickr.com/geckomedia" title="flickr" target="_blank"><span class="flickricon"></span></a></li>
						<li><a href="#"><span class="rss"></span></a></li>
					</ul>
			        			
				</div><!--end social network-->
				
				<div class="four columns"><!--newsletters-->
					<h1 class="heading"><span>Gửi Email</span></h1>			
							
					<form name="newsletter" method="post" action="#" class="newsletters">
						<input type="text" id="newsletters" class="newsletter-inputbox">
						<input type="submit" name="button" value="" class="greybutton-subscribe">
					</form>
					
				</div><!--newsletters-->
                
                </div><!--end containerbox -->
            </div><!--end container -->
                    
        </div><!--end main container-->

<?php get_footer();?>