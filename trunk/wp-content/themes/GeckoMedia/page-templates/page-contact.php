<?php
/*
 * Template Name: page-contact
 */
?>
<?php 
include (TEMPLATEPATH . '/inc/site_option.php');
get_header();
include (TEMPLATEPATH . '/inc/page_intro.php');
?>

                            <?php if(have_posts()) : while (have_posts()): the_post();  ?>
                            <?php  the_content() ?>
                            <?php  endwhile;  else : ?>
                            <p> Khong thay </p>
                            <?php endif; ?>
               

<?php get_footer();?>