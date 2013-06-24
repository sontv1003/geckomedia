<!--##################### footer ######################## -->
<footer>
    <div class="footer-content">
        <div class="container">			
            <div class="four columns"><!--first block-->
                <h3 class="logo"><a href="index.html">Gecko Media</a></h3>
                <p>Công ty thiết kế website uy tín, chất lượng. Dịch vụ thiết kế website theo đúng chuẩn SEO. Hãy cùng tìm hiểu cách chúng tôi giúp việc kinh doanh của bạn phát triển mạnh trên internet!<br />
                    <a href="aboutus.html">Xem tiếp &rarr;</a></p>
            </div><!--end first block-->
            <div class="four columns"><!--second block-->
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
                <?php endif; ?>
            </div><!--end second block-->


            <div class="four columns"><!--third block-->
                <h3>flickr photos</h3>
                <div class="flickr"></div>
            </div><!--end third block-->


            <div class="four columns"><!--fourth block-->
                <h3>Thông tin liên hệ:</h3>
                <p>ĐC: Số 19 Phan Bôi Châu - Hoàn Kiếm - Hà Nội</p>

                <p> Hotline: 097.642.9086</p>

                <p>Email: <a href="mailto:info@geckomedia.vn">info@geckomedia.vn</a></p>
                <ul class="social">
                    <li><a href="https://www.facebook.com/pages/Gecko-Media/329445053849064" title="facebook" target="_blank"><span class="facebook"></span></a></li>
                    <li><a href="http://www.twitter.com/geckomedia" title="twitter" target="_blank"><span class="twitter"></span></a></li>
                    <li><a href="http://www.youtube.com/geckomedia" title="youtube" target="_blank"><span class="youtube"></span></a></li>
                    <li><a href="http://www.linkedin.com/geckomedia" title="linkedin" target="_blank"><span class="linkedin"></span></a></li>
                    <li><a href="#"><span class="rss"></span></a></li>
                </ul>
            </div><!--end fourt block-->


        </div>
    </div>
</footer><!--end footer-->

<div class="bottom"><!--bottom-->
    <div class="bottom-content">
        <div class="sixteen columns">
            <span class="copyright">Copyright &copy; <a href="geckomedia.vn">GECKOMEDIA</a>. All right reserved. </span>

        </div>
    </div>
</div><!--end bottom-->

</div><!--end boxview-->
</div><!-- end boxcontainer-->
<?php wp_footer(); ?>

<div id="toTop">Top</div>

<!-- JS
================================================== -->
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/js/jquery-1.8.2.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/js/tabs.js"></script>

<!--nivo slider-->
<script src="<?php echo bloginfo('template_directory');?>/js/jquery.nivo.slider.js"></script>

<!--plugins-->
<script src="<?php echo bloginfo('template_directory');?>/js/jquery.tweet.js"></script>	
<script src="<?php echo bloginfo('template_directory');?>/js/jquery.flickrush.js"></script>	
<script src="<?php echo bloginfo('template_directory');?>/js/jquery.flexslider.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/js/simple.carousel.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/js/jquery-ui.min.js"></script>	

<!--instantiate js plugins-->
<script src="<?php echo bloginfo('template_directory');?>/js/whatever.js"></script>	
<script src="<?php echo bloginfo('template_directory');?>/js/jquery.jcarousel.js"></script>

<!--[if IE 8]>
        <script src="javascripts/whateverIE8.js"></script>
<![endif]-->

<!-- End Document
================================================== -->
</body>
</html>