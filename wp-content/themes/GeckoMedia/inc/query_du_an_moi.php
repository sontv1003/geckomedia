<?php
/* query cac du an moi */
$query = new WP_Query('tag_id=28&showposts=15');

if ($query->have_posts()) {
    ?>
    <div class="wrap">
        <ul id="mycarousel" class="jcarousel-skin-tango"> 
            <?php
            while ($query->have_posts()) : $query->the_post();?>
                <li><a href="<?php the_permalink(); ?>">
                        <div class="slide-jcarousel">                                   
                            <span class="zoom">+</span>
                            <p class="title"><?php the_title(); ?></p>
                            <div class="bgfade"></div>                    
                            <?php thumb_img($post->ID, '600', '409', '100', get_the_title()); ?>
                        </div>                    
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