<?php 

function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');



function my_script_init()
{ 
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1");
    wp_enqueue_script( 'swiper', '//unpkg.com/swiper@8/swiper-bundle.min.js', "", "1.0.1", true );
    wp_enqueue_style( 'NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap' );
    wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap' );
    wp_enqueue_style( 'Oswald', '//fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap' );
    wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css' );
    wp_enqueue_style( 'fontawesome', '//kit.fontawesome.com/b055b2123e.js' );
    wp_enqueue_style('fontawesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css',array(),'6.1.1');
   
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('slick.min',get_stylesheet_directory_uri().'/slick/slick.min.js',array( 'jquery' ),'1.8.1', true);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/sass/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');
?>