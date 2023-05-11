<?php 
function arch_custom_block() {
    if ( function_exists( 'acf_register_block_type' ) ) {
        acf_register_block_type(  
            array(
               'name'            => 'arch-page-banner',
               'title'           => 'Arch Page Banner',
               'render_template' => 'templates/blocks/block-page-banner.php',
               'category'        => 'common',
               'icon'            => 'admin-comments',
               'mode'            => 'edit'
           ));
        acf_register_block_type(  
            array(
               'name'            => 'arch-page-quote',
               'title'           => 'Arch Page Quote',
               'render_template' => 'templates/blocks/block-page-quote.php',
               'category'        => 'common',
               'icon'            => 'admin-comments',
               'mode'            => 'edit'
           ));
        acf_register_block_type(  
            array(
               'name'            => 'arch-page-cpt',
               'title'           => 'Arch Page CPT',
               'render_template' => 'templates/blocks/block-page-cpt.php',
               'category'        => 'common',
               'icon'            => 'admin-comments',
               'mode'            => 'edit'
           ));

    }
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Arch Settings'),
            'menu_title'    => __('Arch Settings'),
            'menu_slug'     => 'arch-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
   }
}
add_action( 'acf/init', 'arch_custom_block' );

