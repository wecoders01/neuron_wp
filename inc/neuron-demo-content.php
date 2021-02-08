<?php
function neuron_import_files() {
    return array(
        array(
            'import_file_name'             => 'neuron Demo Content Import',
            'categories'                   => 'Category',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-data/neuron-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-data/neuron-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-data/neuron-customize.dat',
            'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'neuron' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'neuron_import_files' );

function neuron_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
        'menu-1' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
    )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Press & News' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'neuron_after_import_setup' );