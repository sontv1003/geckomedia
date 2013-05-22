<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?>
<?php 
include (TEMPLATEPATH . '/inc/site_option.php');
get_header();
include (TEMPLATEPATH . '/inc/page_intro.php');
?>
<div class="maincontainer"><!-- start main container -->
    <div class="container">
        <div class="containerbox">
            <div class="twelve columns"><!--12 columns-->
            
            <div class="portfolio">
<!--              <div class="port-nav">
                <ul>
                  <li class="prev"></li>
                  <li class="grid"></li>
                  <li class="next"></li>
                </ul>
              </div>-->
              <h4><?php the_title(); ?></h4>
              <div class="port-img"> <?php thumb_img($post->ID,'742','312','100',get_the_title());  ?> </div>
              <?php if(have_posts()) : while (have_posts()): the_post();  ?>
                            <?php  the_content() ?>
                            <?php  endwhile;  else : ?>
                            <p> Khong thay </p>
                            <?php endif; ?>
              <div class="shadow-big"></div>
            </div>
            <!-- portfolio desc--> 
            <!-- portfolio desc-->
            <div class="twelve columns alpha">
              <div id="mc"> 
                <!-- AddThis Button BEGIN --> 
                
                <!-- AddThis Button END -->
                
              </div>
              <div class="clear"></div>
            </div>
            <div class="twelve columns alpha">
              <h1 class="heading"><span>Dự án Mới</span></h1>
              <div class="wrap">
                <ul id="mycarousel" class="jcarousel-skin-tango">
                  <li><a href="http://thietkenhadep.vn/" target="_blank">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website Tư vấn thiết kế kiến trúc Perfect Archi</p>
                      <div class="bgfade"></div>
                      <img src="images/port10.jpg" alt="Thiết kế website chuyên nghiệp"> </div>
                    </a> </li>
                  <li><a href="http://banhphuthe.com/" target="_blank">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website Dịch vụ BÁNH PHU THÊ Bắc Ninh</p>
                      <div class="bgfade"></div>
                      <img src="images/port11.jpg" alt="Thiết kế website chuyên nghiệp"> </div>
                    </a> </li>
                  <li><a href="http://www.booksearch.sg" target="_blank">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website Dịch vụ mua bán sách online của Singgapore.</p>
                      <div class="bgfade"></div>
                      <img src="images/port7.jpg" alt="port3"> </div>
                    </a> </li>
                  <li><a href="http://nobuviet.com" target="_blank">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website Dịch vụ Nhà hàng Nobu Việt.</p>
                      <div class="bgfade"></div>
                      <img src="images/port8.jpg" alt="port5"> </div>
                    </a> </li>
                  <li><a href="http://artexthanglong-hometextile.com" target="_blank">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website Dịch vụ cung cấp Chăn Ga Gối Đệm.</p>
                      <div class="bgfade"></div>
                      <img src="images/port1.jpg" alt="port7"> </div>
                    </a> </li>
                  <li><a href="http://linhkienthangmay.com.vn/" target="_blank" >
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website Cung cấp linh kiện thang máy New Home.</p>
                      <div class="bgfade"></div>
                      <img src="images/port2.jpg" alt="port8"> </div>
                    </a> </li>
                  <li><a href="http://itoursvietnam.com/" target="_blank">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website Dịch vụ du lịch itoursvietnam.</p>
                      <div class="bgfade"></div>
                      <img src="images/port3.jpg" alt="port9"> </div>
                    </a> </li>
                  <li><a href="#">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website Dịch vụ khách sạn.</p>
                      <div class="bgfade"></div>
                      <img src="images/port6.jpg" alt="port4"> </div>
                    </a> </li>
                  <li><a href="#">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website trường mầu non Vischool</p>
                      <div class="bgfade"></div>
                      <img src="images/port4.jpg" alt="port1"> </div>
                    </a> </li>
                  <li><a href="#">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Website Dịch vụ Thời Trang Fashion</p>
                      <div class="bgfade"></div>
                      <img src="images/port5.jpg" alt="port2"> </div>
                    </a> </li>
                  <li><a href="#">
                    <div class="slide-jcarousel"> <span class="zoom">+</span>
                      <p class="title">Thiết kế các App cho website công ty & các dịch vụ khác.</p>
                      <div class="bgfade"></div>
                      <img src="images/port9.jpg" alt="port6"> </div>
                    </a> </li>
                </ul>
              </div>
            </div>
            <!--end related work--> 
            
          </div>
          <!--end 12 columns-->

            <?php get_sidebar();?>
        </div><!--end containerbox--> 
    </div><!--end container--> 
</div><!--end main container--> 


<?php get_footer(); ?>