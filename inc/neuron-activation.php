<?php

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function neuron_theme_register_required_plugins() {

    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name'     => __( 'Classic Editor', 'neuron' ), //plugin name
            'slug'     => 'classic-editor', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            // 'force_activation' => true,

        ),
        array(
            'name'     => __( 'Contact Form 7', 'neuron' ), //plugin name
            'slug'     => 'contact-form-7', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            // 'force_activation' => true,

        ),
        array(
            'name'     => __( 'One Click Demo Import', 'neuron' ), //plugin name
            'slug'     => 'one-click-demo-import', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            // 'force_activation' => true,

        ),
        array(
            'name'     => __( 'Duplicator – WordPress Migration Plugin', 'neuron' ), //plugin name
            'slug'     => 'duplicator', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            // 'force_activation' => true,
        ),
        array(
            'name'     => __( 'Flamingo', 'neuron' ), //plugin name
            'slug'     => 'flamingo', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            // 'force_activation' => true,
        ),
        array(
            'name'     => __( 'Wp Theme plugin Download', 'neuron' ), //plugin name
            'slug'     => 'wp-theme-plugin-download', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            // 'force_activation' => true,
        ),
    );

    $config = array(
        'id'          => 'neuron_plugins_activation', // Default absolute path to bundled plugins.
        'menu'        => 'neuron-plugins-activation', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'has_notices' => true, // Show admin notices or not.
    );
    tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'neuron_theme_register_required_plugins' );