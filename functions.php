<!--navigation-->

<?php



//adding excerpt lenght
function excerpt_words_length(){
  return 50;
}

add_filter('excerpt_length','excerpt_words_length');



function funkyfoodies_setup(){
    
    //registering navigation menus
register_nav_menus(array(
   
   'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
    
));
    //featured image
     add_theme_support('post-thumbnails');
     add_image_size('small-thumbnail',180,120,true);
     add_image_size('banner-image',920,210,array('left','top'));
     //post formats
     add_theme_support('post-formats',array('aside','gallery','link'));
}

add_action('after_setup_theme','funkyfoodies_setup');
?>


