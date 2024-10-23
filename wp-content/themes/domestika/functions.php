<?php

// function domestika_admin_head(){
//     echo '<h1>HOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLAHOLA</h1>';
// };

// Add_action('admin_head','domestika_admin_head',1);


// function domestika_the_title($title,$id_post){
//     if($id_post == 163 ){
//         $new_title=$title.' --- title ok';
//         return $new_title;
//     }
//     return $title;
// };

// add_filter('the_title','domestika_the_title','10','2');


function domestika_setup_theme(){
    $supports=[
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ];
    add_theme_support('html5',$supports);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('automatic-feed-links');
    $GLOBALS['content-width']=1130;
}

add_action('after_setup_theme', 'domestika_setup_theme');
add_action('wp_enqueue_scripts','domestika_enqueue_scripts');