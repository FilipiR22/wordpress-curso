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


function domestika_setup_theme()
{
    $supports = [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ];
    add_theme_support('html5', $supports);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    $GLOBALS['content-width'] = 1130;
    load_theme_textdomain('domestika',get_template_directory().'/lenguages');
}

function domestika_enqueue_scripts() {
    wp_enqueue_style('domestika-style',get_stylesheet_uri());
}

add_action('after_setup_theme', 'domestika_setup_theme');
add_action('wp_enqueue_scripts', 'domestika_enqueue_scripts');

function domestika_setup_widgets(){
    register_sidebar([
        'id'=>'sidebar-widgets',
        'name'=>__('Sidebar Widgets','domestika'),
        'description'=>__('Drag widgets to this sidebar container','domestika'),
        'before_widgets'=>'<section id="%1$s" class="widget"> %2$s',
        'after_widgets'=>'</section>',
        'before_title'=>'<h4 class="widget-title h5">',
        'after_title'=>'</h4>'
    ]);
    register_sidebar([
        'id'=>'footer-widgets',
        'name'=>__('Footer Widgets','domestika'),
        'description'=>__('Drag widgets to this footer container','domestika'),
        'before_widgets'=>'<section id="%1$s" class="widget"> %2$s',
        'after_widgets'=>'</section>',
        'before_title'=>'<h4 class="widget-title h5">',
        'after_title'=>'</h4>'
    ]);
};

add_action('widgets_init','domestika_setup_widgets');