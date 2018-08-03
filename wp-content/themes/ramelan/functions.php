<?php

add_theme_support( 'post-thumbnails' ); 
// set_post_thumbnail_size( 330, 550, array( 'center', 'center')  );


function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
/*
 * Set post views count using post meta
 */
function setPostViews($PostID){
  $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

/*
* Register Menu
*/

function register_menus(){
  register_nav_menu('header-menu',__('Header Menu'));
}

add_action('init', 'register_menus');

?>