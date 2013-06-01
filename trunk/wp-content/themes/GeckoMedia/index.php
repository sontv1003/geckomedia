<?php
get_header();
include (TEMPLATEPATH . '/inc/site_option.php');
include (TEMPLATEPATH . '/inc/slider.php');
include (TEMPLATEPATH . '/inc/band_index.php');
 ?>

	<div class="maincontainer"><!-- start main container -->
        
            <div class="container"><!-- features -->
                <div class="containerbox">
                		
                    <div class="four columns">
                        <div class="featuresbox2">
                            <div class="feature1-image"></div>
                            <h2>Thiết kế website</h2>
                            <p>Thiết kế website là hình ảnh doanh nghiệp, cá nhân hay thậm chí là một quốc gia trên internet và để lại giá trị đích thực cho người sử dụng!.</p>
                                <a target="_blank" href="<?php echo get_permalink(252); ?>"><button class="greybutton">Xem Tiếp</button></a>
                        </div>
                    </div>
                    
                    <div class="four columns">
                        <div class="featuresbox2">
                            <div class="feature2-image"></div>				
                            <h2>Quáng bá website</h2>
                            <p>Được tối ưu SEO onpage và thân thiện với các bộ máy tìm kiếm, đồng thời hệ thống website vệ tinh của <a href="http://geckomedia.vn">Gecko Media</a> giúp cho việc SEO trở nên dễ dàng.</p>
                            <a target="_blank" href="<?php echo get_permalink(116); ?>"><button class="greybutton">Xem tiếp</button></a>
                        </div>
                    </div>
                    
                    <div class="four columns">
                        <div class="featuresbox2">
                            <div class="feature4-image"></div>
                            <h2>Hơn 300 mẫu đẹp</h2>
                            <p>Với kho giao diện được thiết kế cực đẹp, chuyên nghiệp, theo tiêu chuẩn quốc tế phù hợp với từng ngành nghề, lĩnh vực kinh doanh. Bạn dễ dàng lựa chọn và thay đổi theo ý muốn.</p>
                            <a target="_blank" href="<?php echo get_category_link(25); ?>"><button class="greybutton">read more</button></a>
                        </div>
                    </div>
                    
                    <div class="four columns">
                        <div class="featuresbox2">
                            <div class="feature3-image"></div>
                            <h2>Hỗ trợ Nhiệt tình</h2>
                            <p>Đội ngũ nhân viên chuyên nghiệp sẽ Hỗ trợ và Tư vân bạn một cách nhanh nhất và nhiệt tình nhất. Đưa ra các giải pháp tối ưu để khách hàng tiếp cận với xu thế và công nghệ mới.</p>
                            <a target="_blank" href="<?php echo get_permalink(25); ?>"><button class="greybutton">read more</button></a>
                        </div>
                    </div>
                    
                </div><!--end containerbox-->
			</div><!--end features-->
		
             <div class="container">
                <div class="containerbox">
                
                	<div class="four columns"><!--why us-->
                        <h1 class="heading"><span>Bạn chọn GECKO?</span></h1>
                        
                        <div id="accordion">
                            <div class="accordionButton"><span>+</span>Dễ dàng sử dụng Hệ thống Admin.</div>
                            <div class="accordionContent">Tích hợp bộ quản lý nội dung cho phép bạn tạo, chỉnh sửa: sản phẩm, tin tức, dịch vụ và mọi thứ. Cập nhật nội dung cũng như cung cấp nhiều thông tin khác như chi tiết công ty, chính sách, khuyễn mãi, tin tức, liên hệ, bảo hành v.v...</div>
                            
                            <div class="accordionButton"><span>+</span>Trả một lần, sở hữu cả đời.</div>
                            <div class="accordionContent">Bạn chỉ cần thanh toán một lần là có thể sử dụng hệ thống web đẹp mà không cần quan tâm đến thời gian kết thúc. Không phải đóng phí hằng năm hay hàng tháng. Nâng cấp và truy cập phiên bản mới miễn phí trong vòng một năm.</div>
                            
                            <div class="accordionButton"><span>+</span>chức năng hiện đại và ưu việt.</div>
                            <div class="accordionContent">Sản phẩm thiết kế website của <a href="http://geckomedia.vn">Gecko Media</a> chứa đựng các đặc tính của thương mại điện tử cùng nhiều cải tiến như one-page checkout, giao diện web dựa trên cơ sở AJAX, bộ quản lý bộ nhớ ảo, quản lý đơn hàng, cập nhật giá sản phẩm hàng loại, quản lý các phiếu giảm giá (copoun) và nhiều đặc tính khác của công nghệ web 2.0.</div>
                            
                            <div class="accordionButton"><span>+</span>Hỗ trợ KT và đáp ứng sự phát triển</div>
                            <div class="accordionContent">Bạn sẽ luôn được hỗ trợ trong khi sử dụng. Các chuyên gia hỗ trợ kỹ thuật của chúng tôi có nhiệm vụ giúp bạn giải quyết những vấn đề kỹ thuật mà bạn đang gặp phải. Bạn có thể thuê lập trình viên của chúng tôi nhằm đáp ứng nhu cầu đặc biệt riêng khi bạn cần thiết kế web cao cấp hơn nhiều tính năng riêng biệt của bạn hơn.</div>
                        </div>                                    
                    </div><!--end why us-->
                    
                    <div class="twelve columns"><!--recent work-->
                        <h1 class="heading">
                            <span>Dự án tiêu biểu</span>
                        </h1>
                       <?php include (TEMPLATEPATH . '/inc/query_du_an_tieu_bieu.php'); ?>
                                              
                    </div><!--end work-->
                
            	</div><!--end containerbox -->
             </div><!--end container -->
                         
            
	<div class="container">
	     <div class="containerbox">
                
                    <div class="twelve columns"><!--from the blog-->
                    
                        <h1 class="heading"><span>Tin Công nghệ mới</span></h1>
                        <?php include (TEMPLATEPATH . '/inc/tin_cong_nghe.php'); ?>
                         
                    
                    </div><!--end from the blog-->
                    
                    
                    <div class="four columns"><!--what client say-->
                    
                        <h1 class="heading"><span>Khách hàng nói...</span></h1>
                        
                        <div class="clientsay">
                            <p>“Chúng tôi đã có Website trước khi sử dụng dịch vụ thiết kế website của Geck Media. Tôi rất hài lòng với trang web mới của mình.</p> 
                            
                            <p>Tôi rất bất ngờ khi sử dụng giải pháp của Gecko Media, website của tôi còn được quảng bá trên google nhanh chóng Cảm ơn Gecko Media”</p>
                        </div>
                        <div class="clientname">
                            <span class="arrow"></span>
                            <span class="name-company">
                                <span class="name">Phạm Tuấn Anh</span><span class="company">http://thietkenhadep.vn</span>
                            </span>
                        </div>
                    
                    </div><!--end what client say-->
                
				</div><!--end containerbox -->
			</div><!--end container -->
		
        </div><!-- end maincontainer -->	
<?php get_footer(); ?>