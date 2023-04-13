<?php

function cvd_custom_post (){

    $services_label = array(
        'name'              => __('services post', 'textdomain'),
        'singular_name'     => __('services post', 'textdomain'),
        'add_new'           => __('add services post', 'textdomain'),
        'add_new_item'   => __('Add New services', 'textdomain'),
        'edit_item'         =>__('edit services post', 'textdomain'),
        'all_items'         =>__('services post', 'textdomain')
    );
    $services_args = array(
        'labels'        => $services_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('servicesPost', $services_args);


    
    $latest_label = array(
        'name'              => __('latest post', 'textdomain'),
        'singular_name'     => __('latest post', 'textdomain'),
        'add_new'           => __('add latest post', 'textdomain'),
        'add_new_item'   => __('Add New latest', 'textdomain'),
        'edit_item'         =>__('edit latest post', 'textdomain'),
        'all_items'         =>__('latest post', 'textdomain')
    );
    $latest_args = array(
        'labels'        => $latest_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('latestPost', $latest_args);

    $project_label = array(
        'name'              => __('project post', 'textdomain'),
        'singular_name'     => __('project post', 'textdomain'),
        'add_new'           => __('add project post', 'textdomain'),
        'add_new_item'   => __('Add New project', 'textdomain'),
        'edit_item'         =>__('edit project post', 'textdomain'),
        'all_items'         =>__('project post', 'textdomain')
    );
    $project_args = array(
        'labels'        => $project_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('projectPost', $project_args);
   

    $servicescontent_label = array(
        'name'              => __('servicescontent post', 'textdomain'),
        'singular_name'     => __('servicescontent post', 'textdomain'),
        'add_new'           => __('add servicescontent post', 'textdomain'),
        'add_new_item'   => __('Add New servicescontent', 'textdomain'),
        'edit_item'         =>__('edit servicescontent post', 'textdomain'),
        'all_items'         =>__('servicescontent post', 'textdomain')
    );
    $servicescontent_args = array(
        'labels'        => $servicescontent_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('servicescontentPost', $servicescontent_args);
   
   


}

add_action('init', 'cvd_custom_post');




