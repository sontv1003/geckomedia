<?php
/*
 * Template Name: page-aboutus
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
            <div class="aboutus"><!--services content-->
                <div class="eight columns">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail')); ?>
                    <img src="<?php echo $url ?>" />
                    <div class="aboutus-shadow"></div>
                </div>
                <div class="eight columns">
                    <h1 class="heading"><span>Đôi điều về GECKO MEDIA</span></h1>
                    <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                            <?php the_content() ?>
                        <?php endwhile;
                    else : ?>
                        <p> Khong thay </p>
<?php endif; ?>
                </div>
            </div><!-- end services -->

        </div><!--end containerbox -->
    </div><!--end container -->
    <div class="container">
        <div class="containerbox">

            <div class="eight columns"><!--our strategy-->
                <h1 class="heading"><span>Mục tiêu của GECKO MEDIA</span></h1>

                <div id="accordion">
                    <div class="accordionButton"><span>+</span>Sứ mệnh của chúng tôi</div>
                    <div class="accordionContent">mong muốn trở thành tổ chức vững mạnh và được cộng đồng tôn trọng bằng cách nỗ lực áp dụng công nghệ và tri thức, góp phần cùng các tổ chức, doanh nghiệp của Việt Nam phát triển hưng thịnh.</div>

                    <div class="accordionButton"><span>+</span>Phương châm</div>
                    <div class="accordionContent">Tăng trưởng doanh nghiệp gắn liền với nhiệm vụ của các khách hàng có nhu cầu sử dụng sản phẩm, dịch vụ công nghệ. <br>
                        Cung cấp các dịch vụ, quy trình phục vụ khách hàng khai thác các giá trị gia tăng của Internet cho hoạt động marketing, bán hàng, giao lưu cộng đồng và quản trị tác nghiệp trong doanh nghiệp, tổ chức</div>

                    <div class="accordionButton"><span>+</span>Cam kết</div>
                    <div class="accordionContent">Cam kết liên tục phát triển, cải tiến và nâng cao chất lượng sản phẩm, áp dụng các công nghệ mới, hoàn thiện dịch vụ, tiến đến thỏa mãn các yêu cầu của của khách hàng với chất lượng được mong đợi ở mức độ cao nhất.</div>

                    <div class="accordionButton"><span>+</span>Sự khác biệt</div>
                    <div class="accordionContent">Sản phẩm và giải pháp CNTT chất lượng cao. <br>
                        Các thiết kế ấn tượng và giải pháp hoàn hảo cho website thương mại điện tử chuyên nghiệp. <br>
                        Các dịch vụ tư vấn, hỗ trợ khách hàng hoàn hảo về CNTT.
                    </div>
                </div>

            </div><!--end strategy-->

            <div class="eight columns"><!--brilliant skills-->
                <h1 class="heading"><span>KỸ NĂNG TUYỆT VỜI</span></h1>			

                <ul class="brilliantskills">
                    <li><div class="skill-web">Web Design <span>85%</span></div></li>
                    <li><div class="skill-html">HTML/CSS <span>80%</span></div></li>
                    <li><div class="skill-graphic">Graphic Design <span>90%</span></div></li>
                    <li><div class="skill-wp">WordPress <span>75%</span></div></li>
                    <li><div class="skill-seo">Search Engine (SEO) <span>85%</span></div></li>			
                </ul>

            </div><!--end brilliant skills-->

        </div><!--end containerbox -->
    </div><!--end container -->


    <div class="container">
        <div class="containerbox">

            <div class="sixteen columns"><!--meet our staff-->

                <h1 class="heading"><span>Nhân viên tiêu biểu</span></h1>

                <div class="wrap">

                    <ul id="mycarousel" class="jcarousel-skin-tango">
                        <li>
                            <div class="slide-jcarousel">
                                <img src="<?php echo bloginfo('template_directory'); ?>/images/staff1.jpg" alt="staff1">
                                <div class="staff-content">
                                    <h4>Mr: Hảo</h4>
                                    <span>CEO</span>
                                    <p>Thành công sẽ không chờ đợi.</p>

                                    <ul>
                                        <li><a href="#"><span class="facebook"></span></a></li>
                                        <li><a href="#"><span class="twitter"></span></a></li>
                                        <li><a href="#"><span class="linkedin"></span></a></li>
                                    </ul>
                                </div>
                                <div class="shadowstaff"></div>
                            </div>
                        </li>

                        <li>
                            <div class="slide-jcarousel">
                                <img src="<?php echo bloginfo('template_directory'); ?>/images/staff1.jpg" alt="staff1">
                                <div class="staff-content">
                                    <h4>Mr: Sơn</h4>
                                    <span>Web Developer</span>
                                    <p>Chưa có câu danh ngôn của mình</p>

                                    <ul>
                                        <li><a href="#"><span class="facebook"></span></a></li>
                                        <li><a href="#"><span class="twitter"></span></a></li>
                                        <li><a href="#"><span class="linkedin"></span></a></li>
                                    </ul>
                                </div>
                                <div class="shadowstaff"></div>
                            </div>
                        </li> 			

                        <li>
                            <div class="slide-jcarousel">
                                <img src="<?php echo bloginfo('template_directory'); ?>/images/staff3.jpg" alt="staff1">
                                <div class="staff-content">
                                    <h4>Miss: Quỳnh Hoa</h4>
                                    <span>Sale</span>
                                    <p>Chưa có câu danh ngôn của mình</p>

                                    <ul>
                                        <li><a href="#"><span class="facebook"></span></a></li>
                                        <li><a href="#"><span class="twitter"></span></a></li>
                                        <li><a href="#"><span class="linkedin"></span></a></li>
                                    </ul>
                                </div>
                                <div class="shadowstaff"></div>
                            </div>
                        </li> 			

                        <li>
                            <div class="slide-jcarousel">
                                <img src="<?php echo bloginfo('template_directory'); ?>/images/dai-design.jpg" alt="staff1">
                                <div class="staff-content">
                                    <h4>Mr: Đại</h4>
                                    <span>Graphic Designer</span>
                                    <p>cách bạn làm 1 việc cũng chính là cách mà bạn làm mọi việc.</p>

                                    <ul>
                                        <li><a href="#"><span class="facebook"></span></a></li>
                                        <li><a href="#"><span class="twitter"></span></a></li>
                                        <li><a href="#"><span class="linkedin"></span></a></li>
                                    </ul>
                                </div>
                                <div class="shadowstaff"></div>
                            </div>
                        </li> 			

                        <li>
                            <div class="slide-jcarousel">
                                <img src="<?php echo bloginfo('template_directory'); ?>/images/staff1.jpg" alt="staff1">
                                <div class="staff-content">
                                    <h4>Mr: Hưng</h4>
                                    <span>Web Designer</span>
                                    <p>Chưa có câu danh ngôn của mình</p>

                                    <ul>
                                        <li><a href="#"><span class="facebook"></span></a></li>
                                        <li><a href="#"><span class="twitter"></span></a></li>
                                        <li><a href="#"><span class="linkedin"></span></a></li>
                                    </ul>
                                </div>
                                <div class="shadowstaff"></div>
                            </div>
                        </li> 			

                        <li>
                            <div class="slide-jcarousel">
                                <img src="<?php echo bloginfo('template_directory'); ?>/images/staff6.jpg" alt="staff1">
                                <div class="staff-content">
                                    <h4>Miss: Hoàng Thư</h4>
                                    <span>Sale</span>
                                    <p>Chưa có câu danh ngôn của mình.</p>

                                    <ul>
                                        <li><a href="#"><span class="facebook"></span></a></li>
                                        <li><a href="#"><span class="twitter"></span></a></li>
                                        <li><a href="#"><span class="linkedin"></span></a></li>
                                    </ul>
                                </div>
                                <div class="shadowstaff"></div>
                            </div>
                        </li>

                    </ul>

                </div>

            </div><!--end staffs-->

        </div><!--end containerbox -->
    </div><!--end container -->





</div><!--end main container-->

<?php get_footer(); ?>