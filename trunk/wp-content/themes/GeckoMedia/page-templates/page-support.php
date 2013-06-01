<?php
/*
 * Template Name: page-support
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
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                                    <img src="<?php echo $url ?>" />
                                <div class="aboutus-shadow"></div>
                            </div>
                            <div class="eight columns">
                                <h1 class="heading"><span>Mọi Thông tin hỗ trợ xin gửi về địa chỉ sua:</span></h1>
                                <p>
                                <strong>Trụ sở Hà Nội</strong><br>
                                ĐC: Số 19 Phan Bội Châu - Hoàn Kiếm - Hà Nội
                                <br>Hotline: <b>097.642.9086</b>
                                <br>Email: info@geckmedia.vn
                                </p> 

                                <p>
                                <strong>Chi Nhánh: Bắc Ninh</strong><br>
                                ĐC: Số 8 Phố Thịnh Lang - Đình Bảng - Từ Sơn - Bắc Ninh
                                <br>ĐT: 0241.3844.100&nbsp;&nbsp;&nbsp; Hotline: <b>0936.474.346</b>
                                <br>Email: info@geckmedia.vn
                                </p> 
                            </div>
                     </div><!-- end services -->
                    
                </div><!--end containerbox -->
            </div><!--end container -->
            
            
            <!--end container -->         
            
            
            
            <!--end container -->

        
        </div><!--end main container-->

<?php get_footer();?>