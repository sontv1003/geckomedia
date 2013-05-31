<?php
/* query cac tin moi */
$query = new WP_Query('cat=22&showposts=3');

if ($query->have_posts()) {
    ?>
    <div class="wrap2">
        <ul class="fromtheblog">
            <?php
            while ($query->have_posts()) : $query->the_post();?>
                <li><a href="<?php the_permalink(); ?>">
                        <div class="slide-jcarousel">                                   
                            <span class="zoom2">+</span>
                            <div class="bgfade"></div>                    
                            <?php thumb_img($post->ID, '600', '409', '100', get_the_title()); ?>
                        </div>                    
                        <h6><?php the_title(); ?></h6>
                        <span class="date"><?php the_time('j F Y');?> | <?php comments_number('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></span>
                        <p><?php echo substr( get_the_excerpt(), 0, strrpos( substr( get_the_excerpt(), 0,100), ' ' ) ); ?></p>

                    </a>
                </li> 
        <?php
        endwhile;
    ?>
        </ul>
    </div>
    <?php wp_reset_query();
}
?>