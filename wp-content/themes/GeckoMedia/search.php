<?php
get_header();
include (TEMPLATEPATH . '/inc/site_option.php');
include (TEMPLATEPATH . '/inc/page_intro.php');
?>
<div class="maincontainer"><!-- start main container -->
    <div class="container">
        <div class="containerbox" id="search-wrap">
        <?php if (have_posts()) : ?>
                        <header class="page-header">
                            <h1 class="page-title"><?php printf(__('Các kết quả cho: %s', 'geckomedia'), '<span>' . get_search_query() . '</span>'); ?></h1>
                        </header>
            <?php while (have_posts()) : the_post(); ?>

                            <div <?php post_class() ?>>

                                <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                                <div class="entry">
                                    <p><?php echo substr(get_the_excerpt(), 0, strrpos(substr(get_the_excerpt(), 0, 990), ' ')); ?></p>
                                    <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a>   
                                </div>

                            </div>

                        <?php endwhile; ?>

                        <?php wp_pagenavi(); ?>

        <?php else : ?>

                        <h2>Không tìm thấy!!!</h2>

        <?php endif; ?>
        </div><!--end containerbox -->
    </div><!--end container -->       


</div><!--end main container-->

<?php get_footer(); ?>