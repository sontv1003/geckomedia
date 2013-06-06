<?php
/*
 * Template Name: page-domain
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
            <div class="twelve columns"><!--12 columns-->
            
             <div class="portfolio">
              <div class="port-nav">
                <ul>
                  <li class="prev"></li>
                  <li class="grid"></li>
                  <li class="next"></li>
                </ul>
              </div>
              <h4><?php the_title(); ?>.</h4>
              <div class="port-img"> <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                                    <img src="<?php echo $url ?>" />
              </div>
               <div class="shadow-big"></div>
            </div>
            <!-- portfolio desc--> 
            <!-- portfolio desc-->
            <div class="twelve columns alpha">
              <h3>Bảng Giá Tên Miền</h3>
              <div class="pricingtable">
                <div class="price-greybox">
                    <h1>Tên Miền</h1>
                    <ul>
                        <li><font color="#FF0000" size="+2">.vn </font></li>
                        <li class="alt"><font style=" font-size:16px;">.com.vn   |   .net.vn   |   .biz.vn</font></li>
                        <li><font style=" font-size:16px;">.com   |   .net   |   .org</font></li>
                        <li class="alt"><font style=" font-size:16px;">.name.vn</font></li>
                        <li><font style=" font-size:16px;">.org.vn   |   .edu.vn    |   .gov.vn    |    .ac.vn   |    .info.vn    |   .pro.vn    |    .health.vn   |   .int.vn</font></li>
                        <li></li>
                    </ul>                            
                </div>
                 <div class="price-greenbox">
                    <h1>Phí Duy Trì/Năm</h1>
                    <ul>
                        <li><font style="color: rgb(255, 0, 0); font-size:18px;">432.000 VNĐ</font></li>
                        <li class="alt"><font style=" font-size:15px;">315.000 VNĐ</font></li>
                        <li><font style=" font-size:15px;">216.000 VNĐ</font></li>
                        <li class="alt"><font style=" font-size:15px;">27.000 VNĐ</font></li>
                        <li><font style=" font-size:15px;">180.000 VNĐ</font></li>
                        <li></li>
                    </ul>                            
                </div>
                
                 <div class="price-greybox pricebox-marginleft">
                    <h1>Phí Khởi Tạo</h1>
                    <ul>
                        <li><font style="color: rgb(255, 0, 0);">315.000 VNĐ</font></li>
                        <li class="alt"><font style=" font-size:15px;">315.000 VNĐ</font></li>
                        <li><font style=" font-size:15px;">Miễn phí</font></li>
                        <li class="alt"><font style=" font-size:15px;">27.000 VNĐ</font></li>
                        <li><font style=" font-size:15px;">180.000 VNĐ</font></li>
                        <li></li>
                    </ul>                            
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <h3>Bảng Giá Hosting</h3>
              <div class="pricingtable">
                <div class="price-greybox">
                    <h1>Cá Nhân</h1>
                    <span class="price">24k</span>
                    <p class="grey">VNĐ/Tháng</p>
                    
                    <ul>
                        <li>Dung lượng: 300 MB</li>
                        <li class="alt">Băng thông: 5 GB</li>
                        <li class="alt">Tài khoản email: 10</li>
                        <li>Add on Domain: 0</li>
                        <li class="alt">Tên miền phụ: 3 </li>
                        <li>Park Domain: 3</li>
                        <li class="alt">My SQL/ MS SQL: 1</li>
                        <li>Hợp đồng tối thiểu: 12 tháng</li>
                        <li><button class="greybutton">Đăng Ký</button></li>
                    </ul>                            
                </div>
                
                 <div class="price-greenbox">
                    <h1>Doanh Nghiệp</h1>
                    <span class="price">88k</span>
                    
                    <ul>
                        <li>Dung lượng: 1.200 MB</li>
                        <li class="alt">Băng thông: 30 GB</li>
                        <li class="alt">Tài khoản email: 50</li>
                        <li>Add on Domain: 3</li>
                        <li class="alt">Tên miền phụ: 20</li>
                        <li>Park Domain: 20</li>
                        <li class="alt">My SQL/ MS SQL: 4</li>
                        <li>Hợp đồng tối thiểu: 6 tháng</li>
                        <li><button class="greybutton">Đăng Ký</button></li>
                    </ul>                            
                </div>
                
                 <div class="price-greybox pricebox-marginleft">
                    <h1>Thương mại điện tử</h1>
                    <span class="price">280k</span>
                    <p class="grey">VNĐ/Tháng</p>
                    
                    <ul>
                        <li>Dung lượng: 3500 MB</li>
                        <li class="alt">Băng thông: 120 GB</li>
                        <li class="alt">Tài khoản email: 150</li>
                        <li>Add on Domain: 10</li>
                        <li class="alt">Tên miền phụ: Không giới hạn</li>
                        <li>Park Domain: 100</li>
                        <li class="alt">My SQL/ MS SQL: 11</li>
                        <li>Hợp đồng tối thiểu: 6 tháng</li>
                        <li><button class="greybutton">Đăng Ký</button></li>
                    </ul>                            
                </div>
            </div>
                <br>
                <br>
             
              <div class="clear"></div>
            </div>
            <div class="twelve columns alpha">
              <h1 class="heading"><span>Dự án Mới</span></h1>
              <?php include (TEMPLATEPATH . '/inc/query_du_an_moi.php'); ?>
            </div>
            <!--end related work--> 
            
          </div>
           
          <!--end 12 columns-->

            <?php get_sidebar();?>
        </div><!--end containerbox--> 
    </div><!--end container--> 
</div><!--end main container--> 


<?php get_footer(); ?>