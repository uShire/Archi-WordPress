<?php
function arch_custom_post_type(){
    $service_label  = array (
        'name'          => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new'       => __('Add Service', 'textdomain'),
        'add_new_item'  => __('Add New Service', 'textdomain'),
        'edit_item'     => __('Edit Service', 'textdomain'),
        'all_items'     => __('Services', 'textdomain')
    );
    $service_args = array(  
            'labels'              => $service_label,
            'public'              => true,
            'menu_icon'           => 'dashicons-admin-tools',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor', 'excerpt','thumbnail')
    );
    register_post_type( 'services', $service_args );

    
    /*-----------PROJECT------------- */
    $project_label  = array (
        'name'          => __('Projects', 'textdomain'),
        'singular_name' => __('Project', 'textdomain'),
        'add_new'       => __('Add Project', 'textdomain'),
        'add_new_item'  => __('Add New Project', 'textdomain'),
        'edit_item'     => __('Edit Project', 'textdomain'),
        'all_items'     => __('Projects', 'textdomain'),
        'taxonomies'    => __array('category')
    );
    $project_args = array(  
            'labels'              => $project_label,
            'public'              => true,
            'menu_icon'           => 'dashicons-admin-tools',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor', 'excerpt','thumbnail')
    );
    register_post_type( 'project', $project_args );
}
add_action( 'init', 'arch_custom_post_type');
