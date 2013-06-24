<div class="four columns"><!--4 columns-->
            
            <aside class="sidebar"><!--sidebar-->
              
              <div class="blogcategories"><!--blog categories-->
                <h6>Danh mục Dịch Vụ</h6>
                  <?php wp_nav_menu(array('theme_location'=> 'sidebar-menu','container' =>''));?>
              </div>
              <!--end blog categories-->
              <div class="textwidget"><!--text widget-->
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
                <?php endif; ?>
              </div>
              
              <!--end tabwidget-->
              
              <div class="accordionwidget"><!--accordion widget-->
                <h6 class="margin20">Khi chọn GECKO MEDIA</h6>
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
              </div>
              <!--end accordion widget--> 
              
              <!--end tex widget-->
              
              <div class="flickrwidget"><!--text widget-->
                <h6 class="margin20">flickr photo</h6>
                <div class="flickr"></div>
              </div>
              <!--end tex widget--> 
              
            </aside>
            <!--end sidebar--> 
            
          </div>
          <!--end 4 columns--> 