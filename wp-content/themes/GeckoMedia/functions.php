<?php
/**
 * Twenty Twelve functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */



/**
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Twelve supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_setup() {
	/*
	 * Makes Twenty Twelve available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Twelve, use a find and replace
	 * to change 'twentytwelve' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentytwelve', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

        //creat menu support for theme
       
         // Remove auto add tag p and br
        remove_filter ('the_content', 'wpautop');
        remove_filter ('the_content', 'wpautobr'); 
        
	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 530, 450 ,true);
}
add_action( 'after_setup_theme', 'twentytwelve_setup' );

    // Timthumb
    function get_featured_img($post_id){
        $img_id = get_post_thumbnail_id($post_id); // lấy id của hình
        $images=wp_get_attachment_image_src( $img_id, false, false ); // lấy link hình featured
        return $images[0]; // 0: link hình ; 1: width ; 2: height
    }
    
    function thumb_img($post_id,$w,$h,$q,$alt){
        echo '<img align="middle" src="';
        echo bloginfo('template_url');
        echo '/timthumb.php?src='.get_featured_img($post_id).'&amp;w='.$w.'&amp;h='.$h.'&amp;q='.$q.'" alt="'.$alt.'" />';  
    }

// menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header' => __( 'Header' ),
      'sidebar-menu' => __( 'Sidebar' )
    )
  );
}

add_action( 'init', 'register_my_menus' );


 // Hien thi luot xem bai viet

function getPostViews($postID){
   $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }

}
?>

<?php
/*
 * Tạo Yahoo status widget
 * */


class Yahoo_Status extends WP_Widget {
 
    //Khởi tạo contructor của 1 lớp
    function Yahoo_Status(){
        parent::WP_Widget('Yahoo_Status_Widget',
            'Yahoo Status',
            array('description' => 'Trạng thái nick yahoo.'));
    }
    
    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title',
            empty($instance['title']) ? '' : $instance['title'],
            $instance, $this->id_base);
         $text = apply_filters( 'widget_text',
            $instance['text'], $instance ); 
        $name = apply_filters( 'widget_name',
            $instance['name'], $instance );
        
        $email= apply_filters( 'widget_email',
            $instance['email'], $instance );
       
        $phone_number = apply_filters( 'widget_phone_number',
            $instance['phone_number'], $instance );
        
        $avatar = apply_filters( 'widget_avatar',
            $instance['avatar'], $instance );
        
        echo $before_widget;
        if ( !empty( $title ) ) { 
            echo $before_title . '<h6 class="margin20">'.$title .'</h6>'. $after_title; } ?>        
           <div class="ja-col">
            <?php 
                  $str_text = explode(",", $text); 
                  $str_name = explode(",", $name); 
                  $str_phone_number = explode(",", $phone_number); 
                  $str_email = explode(",", $email); 
                  $str_avatar = explode(",", $avatar); 
                  $length = count($str_text);
                  for($i=0;$i<$length;$i++){
                ?>
                    
                  <li> <a title="Thư Tư vấn thiết kế web bán hàng" target="_blank" href="ymsgr:sendim?<?php echo trim($str_text[$i]);?>" rel="nofollow"> <img border="0" class="avatar" alt="Thư Tư vấn thiết kế web bán hàng" title="Thư Tư vấn thiết kế web bán hàng" src="<?php echo trim($str_avatar[$i]);?>"></a> <span class="title-ho-tro" style="top: -40px;"><?php echo trim($str_name[$i]);?></span> <span class="sdt" style="top: -40px;"><?php echo trim($str_phone_number[$i]);?></span> <span class="sdt" style="top: -40px;"><?php echo trim($str_email[$i]);?></span>
                    <div class="link"> <a class="yahoo" target="_blank" href="ymsgr:sendim?<?php echo trim($str_text[$i]);?>" rel="nofollow" title="Tư vấn thiết kế web bán hàng"> <img src="http://opi.yahoo.com/online?u=<?php echo trim($str_text[$i]);?>&amp;m=g&amp;t=5"> </a> <a rel="nofollow" class="mailto" href="mailto:<?php echo trim($str_email[$i]);?>"><?php echo trim($str_email[$i]);?></a> </div>
                  </li>
                  
            <?php   }                    
            ?>
           </div>  
            


        <?php
        echo $after_widget;
    }
    
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title']        = strip_tags($new_instance['title']);
        $instance['name']         = strip_tags($new_instance['name']);
        $instance['phone_number'] = strip_tags($new_instance['phone_number']);
        $instance['email']        = strip_tags($new_instance['email']);
        $instance['avatar']       = strip_tags($new_instance['avatar']);
    return $instance;
    }
    
    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance,
            array( 'title' => '', 'text' => '','name' => '','phone_number' => '','email' => '' ,'avatar' => '') );
        $title = strip_tags($instance['title']);
        $text = format_to_edit($instance['text']);
        $name = format_to_edit($instance['name']);
        $phone_number = format_to_edit($instance['phone_number']);
        $email = format_to_edit($instance['email']);
        $avatar = format_to_edit($instance['avatar']);
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Tiêu đề:'); ?> </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>" type="text"
                value="<?php echo  esc_attr($title);?>" />
        </p>
      
            <label for="<?php echo $this->get_field_id('text'); ?>">
                <?php _e('Nick yahoo(cách nhau bởi dấu ,):'); ?> </label>
            <textarea class="widefat" rows="5" cols="10"
                id="<?php echo $this->get_field_id('text'); ?>"
                name="<?php echo $this->get_field_name('text'); ?>">
                    <?php echo $text;?>
            </textarea>
        <p>
            <label for="<?php echo $this->get_field_id('text'); ?>">
                <?php _e('Ví dụ: tanvannguyen18, meocon17'); ?>
            </label>         
        </p>
        
        <label for="<?php echo $this->get_field_id('name'); ?>">
                <?php _e('Tên (cách nhau bởi dấu ,):'); ?> </label>
            <textarea class="widefat" rows="5" cols="10"
                id="<?php echo $this->get_field_id('name'); ?>"
                name="<?php echo $this->get_field_name('name'); ?>">
                    <?php echo $name;?>
            </textarea>
        <p>
            <label for="<?php echo $this->get_field_id('name'); ?>">
                <?php _e('Ví dụ: tanvannguyen18, meocon17'); ?>
            </label>         
        </p>
        
        <label for="<?php echo $this->get_field_id('phone_number'); ?>">
                <?php _e('Số điện thoại(cách nhau bởi dấu ,):'); ?> </label>
            <textarea class="widefat" rows="5" cols="10"
                id="<?php echo $this->get_field_id('phone_number'); ?>"
                name="<?php echo $this->get_field_name('phone_number'); ?>">
                    <?php echo $phone_number;?>
            </textarea>
        <p>
            <label for="<?php echo $this->get_field_id('phone_number'); ?>">
                <?php _e('Ví dụ: 0987654321, 0123456789'); ?>
            </label>         
        </p>
        
        <label for="<?php echo $this->get_field_id('email'); ?>">
                <?php _e('Địa chỉ email(cách nhau bởi dấu ,):'); ?> </label>
            <textarea class="widefat" rows="5" cols="10"
                id="<?php echo $this->get_field_id('email'); ?>"
                name="<?php echo $this->get_field_name('email'); ?>">
                    <?php echo $email;?>
            </textarea>
        <p>
            <label for="<?php echo $this->get_field_id('email'); ?>">
                <?php _e('Ví dụ: geckomedia1@gmail.com, geckomedia2@gmail.com'); ?>
            </label>         
        </p>
        
        <label for="<?php echo $this->get_field_id('avatar'); ?>">
                <?php _e('Link ảnh đại diện(cách nhau bởi dấu ,):'); ?> </label>
            <textarea class="widefat" rows="5" cols="10"
                id="<?php echo $this->get_field_id('avatar'); ?>"
                name="<?php echo $this->get_field_name('avatar'); ?>">
                    <?php echo $avatar;?>
            </textarea>
        <p>
            <label for="<?php echo $this->get_field_id('avatar'); ?>">
                <?php _e('Ví dụ: 0987654321, 0123456789'); ?>
            </label>         
        </p>
<?php
   }
}
     
register_widget('Yahoo_Status');
?>


<?php
//Form list Comment

function gecko_media_comment($comment, $args, $depth)    {
    $GLOBALS['comment'] = $comment; ?>
    <li>
        
           <?php echo get_avatar($comment, $size='60', $default='<path_to_url>'); ?>
            <div class="comment-details">
                <span class="c-name">
                    <?php printf(__('<span class="fn">%s</span>'), get_comment_author_link()); ?>
                    <?php if($comment->comment_approved == '0') : ?>
                    <em><?php echo 'Your coment is waiting for moderation.';?></em>
                    <?php endif; ?>
                </span>&#149;
                <span class="reply"><?php comment_reply_link(array_merge($args,array('depth' => $depth, 'max_depth'=> $args['max_depth'])));?></span>
                <p> <?php printf(get_comment_date('j F Y'));?></p>
                <p><?php comment_text(); ?></p>
            </div>                 				
    
    <?php } ?>
<?php 
        
 include_once (TEMPLATEPATH. '/inc/slide_option.php');

/**
 * Enqueues scripts and styles for front-end.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* translators: If there are characters in your language that are not supported
	   by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'twentytwelve' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Open Sans character subset specific to your language, translate
		   this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'twentytwelve' );

		if ( 'cyrillic' == $subset )
			$subsets .= ',cyrillic,cyrillic-ext';
		elseif ( 'greek' == $subset )
			$subsets .= ',greek,greek-ext';
		elseif ( 'vietnamese' == $subset )
			$subsets .= ',vietnamese';

		$protocol = is_ssl() ? 'https' : 'http';
		$query_args = array(
			'family' => 'Open+Sans:400italic,700italic,400,700',
			'subset' => $subsets,
		);
		wp_enqueue_style( 'twentytwelve-fonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
	}

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'twentytwelve-style', get_stylesheet_uri() );

	/*
	 * Loads the Internet Explorer specific stylesheet. You could however just hook into the html class that modernizr adds.
	 */
	wp_enqueue_style( 'twentytwelve-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentytwelve-style' ), '20121010' );
	$wp_styles->add_data( 'twentytwelve-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'twentytwelve_scripts_styles' );

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Twenty Twelve 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function twentytwelve_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'twentytwelve_wp_title', 10, 2 );

/**
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentytwelve_page_menu_args' );

/**
 * Registers our main widget area and the front page widget areas.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentytwelve' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'First Front Page Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Front Page Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'twentytwelve_widgets_init' );

if ( ! function_exists( 'twentytwelve_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
			<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentytwelve' ) ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></div>
		</nav><!-- #<?php echo $nav_id; ?> .navigation -->
	<?php endif;
}
endif;

if ( ! function_exists( 'twentytwelve_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentytwelve_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'twentytwelve' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite class="fn">%1$s %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span> ' . __( 'Post author', 'twentytwelve' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'twentytwelve' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentytwelve' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'twentytwelve' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'twentytwelve' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;

if ( ! function_exists( 'twentytwelve_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentytwelve_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentytwelve' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @since Twenty Twelve 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void
 */
function twentytwelve_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'twentytwelve_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_customize_preview_js() {
	wp_enqueue_script( 'twentytwelve-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20120827', true );
}

function blankSlate_load_javascript_files() {

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3');

	wp_register_script( 'site-script', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true );
	wp_register_script( 'modernizer', get_template_directory_uri() . '/js/modernizr-2.5.3.min.js', false, false, true );

	wp_enqueue_script('jquery');
	wp_enqueue_script('site-script');
	wp_enqueue_script('modernizer');
  
	if ( is_front_page() ) {
		wp_enqueue_script('home-page-main-flex-slider');
	}
}

add_action( 'wp_enqueue_scripts', 'blankSlate_load_javascript_files' );

add_action( 'customize_preview_init', 'twentytwelve_customize_preview_js' );
