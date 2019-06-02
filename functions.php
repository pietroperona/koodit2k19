<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
//custom footer menu 4col
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Top-Footer col1', 'wpb' ),
        'id' => 'sidebar-10',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Top-Footer col2', 'wpb'),
        'id' => 'sidebar-11',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
	
	
	register_sidebar( array(
        'name' =>__( 'Top-Footer col3', 'wpb'),
        'id' => 'sidebar-12',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
	
	register_sidebar( array(
        'name' =>__( 'Top-Footer col4', 'wpb'),
        'id' => 'sidebar-13',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );

if (class_exists('MultiPostThumbnails')) {
 
    new MultiPostThumbnails(array(
    'label' => 'Secondary Image',
    'id' => 'secondary-image',
    'post_type' => 'post'
     ) );
     
     }

     function wpb_related_pages() { 
        $orig_post = $post;
        global $post;
        $tags = wp_get_post_tags($post->ID);
        if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag)
        $tag_ids[] = $individual_tag->term_id;
        $args=array(
        'post_type' => 'businesses',
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=>3
        );
        $my_query = new WP_Query( $args );
        if( $my_query->have_posts() ) {
        echo '<div class="row">';
        while( $my_query->have_posts() ) {
        $my_query->the_post(); ?>
        <div class="col-md-4">
            <div class="card-rel bg-light text-white">
            <div class="heffect">
                <img class="card-img rel-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="Koodit Businesses">
            </div>    
                <div class="card-img-overlay align-items-bottom">
                    <h2 class="card-title"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    <i class="fa fa-long-arrow-right rel-arrow" aria-hidden="true"></i>
                    </h2>
                    <hr class="rel-hr">
                    <!-- <p class="card-text"><?php echo get_post_meta($post->ID, 'business', true)?></p> -->
                </div>
            </div>  
        </div>
        <? }
        echo '</div>';
        } else { 
        echo "No Related Pages Found:";
        }
        }
        $post = $orig_post;
        wp_reset_query(); 
        }     
