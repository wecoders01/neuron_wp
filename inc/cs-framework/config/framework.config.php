<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings = array(
    'menu_title'      => 'Theme Options',
    'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
    'menu_slug'       => 'neuron-theme-options',
    'ajax_save'       => false,
    'show_reset_all'  => false,
    'framework_title' => 'Neuron Theme <small>by iTanvir</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// THEME OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();
// ----------------------------------------
// Global Theme Options
// ----------------------------------------
$options[] = array(
    'name'   => 'global',
    'title'  => 'Global Options',
    'icon'   => 'fa fa-globe',

    // begin: Fields
    'fields' => array(

        // begin: Company Logos Area
        array(
            'id'    => 'company_logos',
            'type'  => 'gallery',
            'title' => 'Company Logos',
            'desc'  => 'Upload Company Logos Here.',
        ), // end: Company Logos Area
    ), // end: Fields
 ); // end: Global Theme Option

// ----------------------------------------
// Header Theme Options
// ----------------------------------------
$options[] = array(
    'name'   => 'header',
    'title'  => 'Header Options',
    'icon'   => 'fa fa-star',

    // begin: Fields
    'fields' => array(

        // begin: Top_Header Enabling Area
        array(
            'id'      => 'enable_top_header_area',
            'type'    => 'switcher',
            'title'   => 'Enable Top Area?',
            'label'   => 'You want to Enable this section?',
            'desc'    => 'If you want to enable this area, Select Yes',
            'default' => true,
        ), // end: Top_Header Enabling Area

        // begin: FAQx Area
        array(
            'id'              => 'header_links',
            'type'            => 'group',
            'title'           => 'Header Left Links',
            'button_title'    => 'Add New',
            'accordion_title' => 'Add New link',
            'desc'            => 'Add New Link',
            'fields'          => array(
                array(
                    'id'    => 'link_text',
                    'type'  => 'text',
                    'title' => 'Link Text',
                ),
                array(
                    'id'    => 'icon',
                    'type'  => 'icon',
                    'title' => 'Link Icon',
                ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => 'Link',
                ),
                array(
                    'id'      => 'link_target',
                    'type'    => 'select',
                    'title'   => 'Link Target',
                    'default' => '_blank',
                    'options' => array(
                        '_self'  => 'Open in Same Tab',
                        '_blank' => 'Open in New Tab',
                    ),
                ),
            ),
            'dependency'      => array( 'enable_top_header_area', '==', 'true' ),
            'default'         => array(
                array(
                    'link_text' => ' +880 123 456 789',
                    'icon'      => 'fa fa-phone',
                    'link'      => '',
                ),
                array(
                    'link_text' => ' 24hrsuport@domain.com',
                    'icon'      => 'fa fa-envelope',
                    'link'      => 'mailto: 24hrsuport@domain.com',
                ),
            ),
        ), // end: Header Left Area

        // begin: Top_Header Enabling Area
        array(
            'id'         => 'enable_top_social_area',
            'type'       => 'switcher',
            'title'      => 'Enable Top Social Area?',
            'label'      => 'You want to Enable this section?',
            'desc'       => 'If you want to enable this area, Select Yes',
            'default'    => true,
            'dependency' => array( 'enable_top_header_area', '==', 'true' ),
        ), // end: Top_Header Enabling Area
    ), // end: Fields
 ); // end: Header Theme Option

// ----------------------------------------
// Socials Theme Options
// ----------------------------------------
$options[] = array(
    'name'   => 'socials',
    'title'  => 'Social Options',
    'icon'   => 'fa fa-star',

    // begin: Fields
    'fields' => array(

        // begin: FAQx Area
        array(
            'id'              => 'socials',
            'type'            => 'group',
            'title'           => 'Social Links',
            'button_title'    => 'Add New',
            'accordion_title' => 'Add New Social',
            'desc'            => 'Add New Social Link',
            'fields'          => array(
                array(
                    'id'    => 'icon',
                    'type'  => 'icon',
                    'title' => 'Social Icon',
                ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => 'Link',
                ),
                array(
                    'id'      => 'link_target',
                    'type'    => 'select',
                    'title'   => 'Link Target',
                    'default' => '_blank',
                    'options' => array(
                        '_self'  => 'Open in Same Tab',
                        '_blank' => 'Open in New Tab',
                    ),
                ),
            ),
            'default'         => array(
                array(
                    'icon' => 'fa fa-facebook',
                    'link' => '#',
                ),
                array(
                    'icon' => 'fa fa-instagram',
                    'link' => '#',
                ),
                array(
                    'icon' => 'fa fa-linkedin',
                    'link' => '#',
                ),
                array(
                    'icon' => 'fa fa-twitter',
                    'link' => '#',
                ),
                array(
                    'icon' => 'fa fa-google-plus',
                    'link' => '#',
                ),
            ),
        ), // end: Social Links Area
    ), // end: Fields
 ); // end: Socials Theme Option

// ----------------------------------------
// Home Theme Options
// ----------------------------------------
$options[] = array(
    'name'   => 'home',
    'title'  => 'Home',
    'icon'   => 'fa fa-home',

    // begin: fields
    'fields' => array(

        // begin: Features Enabling Area
        array(
            'id'      => 'enable_features_area',
            'type'    => 'switcher',
            'title'   => 'Enable Features Area?',
            'label'   => 'You want to Enable this section?',
            'desc'    => 'If you want to enable this area, Select Yes',
            'default' => true,
        ),
        // end: Features Enabling Area

        // begin: Features Title
        array(
            'id'         => 'features_title',
            'type'       => 'text',
            'title'      => 'Features Title',
            'desc'       => 'Type Features Area Title',
            'default'    => 'Welcome to the Neuron Finance',
            'dependency' => array( 'enable_features_area', '==', 'true' ),
        ),
        // end: Features Title

        // begin: Features Content
        array(
            'id'         => 'features_content',
            'type'       => 'textarea',
            'title'      => 'Features Content',
            'desc'       => 'Type Features Area Content',
            'dependency' => array( 'enable_features_area', '==', 'true' ),
            'default'    => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
        ),
        // end: Features Content

        // begin: Enabling Homepage Content Area
        array(
            'id'      => 'enable_homepage_content_area',
            'type'    => 'switcher',
            'title'   => 'Enable Content Area?',
            'label'   => 'You want to Enable this section?',
            'desc'    => 'If you want to enable this area, Select Yes',
            'default' => true,
        ),
        // end: Enabling Homepage Content Area

        // begin: Homepage Content Title
        array(
            'id'         => 'home_content_title',
            'type'       => 'text',
            'title'      => 'Home Content Title',
            'desc'       => 'Type Home Content Area Title',
            'default'    => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
            'dependency' => array( 'enable_homepage_content_area', '==', 'true' ),
        ),
        // end: Homepage Content Title

        // begin: Homepage Content Text
        array(
            'id'         => 'home_content_text',
            'type'       => 'textarea',
            'title'      => 'Home Content Text',
            'desc'       => 'Type Home Content Area text',
            'dependency' => array( 'enable_homepage_content_area', '==', 'true' ),
            'default'    => 'Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.

        Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics.',
        ),
        // end: Homepage Content Text

        // begin: Homepage Content Image
        array(
            'id'         => 'home_content_img',
            'type'       => 'image',
            'title'      => 'Home Content Image',
            'desc'       => 'Upload Home Content Image',
            'dependency' => array( 'enable_homepage_content_area', '==', 'true' ),
        ),
        // end: Homepage Content Image

        // begin: Enabling Services Area
        array(
            'id'      => 'enable_services_area',
            'type'    => 'switcher',
            'title'   => 'Enable Services Area?',
            'label'   => 'You want to Enable this section?',
            'desc'    => 'If you want to enable services area, Select Yes',
            'default' => true,
        ),
        // end: Enabling Services Area

        // begin: Services Title
        array(
            'id'         => 'services_title',
            'type'       => 'text',
            'title'      => 'Services Title',
            'desc'       => 'Type Services Area Title',
            'dependency' => array( 'enable_services_area', '==', 'true' ),
            'default'    => 'We Provide Huge Range of Services',
        ),
        // end: Services Title

        // begin: Services Content
        array(
            'id'         => 'services_content',
            'type'       => 'textarea',
            'title'      => 'Services Content',
            'desc'       => 'Type Services Area Content',
            'dependency' => array( 'enable_services_area', '==', 'true' ),
            'default'    => 'Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.',
        ),
        // end: Services Content

        // begin: Enabling Client Area
        array(
            'id'      => 'enable_client_area',
            'type'    => 'switcher',
            'title'   => 'Enable Client Area?',
            'label'   => 'You want to Enable this section?',
            'desc'    => 'If you want to enable client area, Select Yes',
            'default' => true,
        ),
        // end: Enabling Client Area

    ), // end: fields
 ); // end: Home Theme Option

// ----------------------------------------
// About Theme Options
// ----------------------------------------
$options[] = array(
    'name'   => 'about_us',
    'title'  => 'About Us',
    'icon'   => 'fa fa-users',

    // begin: fields
    'fields' => array(

        // begin: Enabling Homepage Content Area
        array(
            'id'      => 'enable_about_content_area',
            'type'    => 'switcher',
            'title'   => 'Enable Content Area?',
            'label'   => 'You want to Enable this section?',
            'desc'    => 'If you want to enable this area, Select Yes',
            'default' => true,
        ),
        // end: Enabling Homepage Content Area

        // begin: Homepage Content Title
        array(
            'id'         => 'about_content_title',
            'type'       => 'text',
            'title'      => 'About Content Title',
            'desc'       => 'Type About Content Area Title',
            'default'    => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
            'dependency' => array( 'enable_about_content_area', '==', 'true' ),
        ),
        // end: Homepage Content Title

        // begin: Homepage Content Text
        array(
            'id'         => 'about_content_text',
            'type'       => 'textarea',
            'title'      => 'About Content Text',
            'desc'       => 'Type About Content Area Text',
            'dependency' => array( 'enable_about_content_area', '==', 'true' ),
            'default'    => 'Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust       meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.

            Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics.',
        ),
        // end: Homepage Content Text

        // begin: Homepage Content Image
        array(
            'id'         => 'about_content_img',
            'type'       => 'image',
            'title'      => 'About Content Image',
            'desc'       => 'Upload About Content Image',
            'dependency' => array( 'enable_about_content_area', '==', 'true' ),
        ),
        // end: Homepage Content Image

        // begin: Enabling About Services Area
        array(
            'id'      => 'enable_about_services_area',
            'type'    => 'switcher',
            'title'   => 'Enable Services Area?',
            'label'   => 'You want to Enable this section?',
            'desc'    => 'If you want to enable services area, Select Area',
            'default' => true,
        ),
        // end: Enabling About Services Area

        // begin: Enabling Accordion Area
        array(
            'id'      => 'enable_accordion_area',
            'type'    => 'switcher',
            'title'   => 'Enable Accordion Area?',
            'label'   => 'You want to Enable this section?',
            'desc'    => 'If you want to enable this area, Select Yes',
            'default' => true,
        ),
        // end: Enabling Accordion Area

        // begin: FAQx Area
        array(
            'id'              => 'faqs',
            'type'            => 'group',
            'title'           => 'FAQs',
            'button_title'    => 'Add New',
            'accordion_title' => 'Add New FAQ',
            'desc'            => 'Add FAQs',
            'dependency'      => array( 'enable_accordion_area', '==', 'true' ),
            'fields'          => array(
                array(
                    'id'    => 'faq_title',
                    'type'  => 'text',
                    'title' => 'FAQ Title',
                ),
                array(
                    'id'    => 'faq_content',
                    'type'  => 'textarea',
                    'title' => 'FAQ Content',
                ),
            ),
            'default'         => array(
                array(
                    'faq_title'   => 'FAQ Title 1',
                    'faq_content' => 'Distinctively productize progressive deliverables before diverse products. Conveniently underwhelm next-generation leadership for end-to-end mindshare. Holisticly communicate 2.0 niches and accurate methods of empowerment. Completely myocardinate collaborative technology.',
                ),
                array(
                    'faq_title'   => 'FAQ Title 2',
                    'faq_content' => 'Distinctively productize progressive deliverables before diverse products. Conveniently underwhelm next-generation leadership for end-to-end mindshare. Holisticly communicate 2.0 niches and accurate methods of empowerment. Completely myocardinate collaborative technology.',
                ),
                array(
                    'faq_title'   => 'FAQ Title 3',
                    'faq_content' => 'Distinctively productize progressive deliverables before diverse products. Conveniently underwhelm next-generation leadership for end-to-end mindshare. Holisticly communicate 2.0 niches and accurate methods of empowerment. Completely myocardinate collaborative technology.',
                ),
                array(
                    'faq_title'   => 'FAQ Title 4',
                    'faq_content' => 'Distinctively productize progressive deliverables before diverse products. Conveniently underwhelm next-generation leadership for end-to-end mindshare. Holisticly communicate 2.0 niches and accurate methods of empowerment. Completely myocardinate collaborative technology.',
                ),
            ),
        ),
        // end: FAQx Area

        // begin: Accordion Right Title
        array(
            'id'         => 'accordion_title',
            'type'       => 'text',
            'title'      => 'Accordion Right Title',
            'desc'       => 'Type Accordion Right Title',
            'default'    => 'Know More About Us',
            'dependency' => array( 'enable_accordion_area', '==', 'true' ),
        ),
        // end: Accordion Right Title

        // begin: Accordion Right Content
        array(
            'id'         => 'accordion_content',
            'type'       => 'textarea',
            'title'      => 'Accordion Right Content',
            'desc'       => 'Type Accordion Right Content',
            'dependency' => array( 'enable_accordion_area', '==', 'true' ),
            'default'    => 'Intrinsicly synergize end-to-end results after robust models. Enthusiastically initiate wireless solutions via leading-edge users. Phosfluorescently repurpose world-class networks whereas bleeding-edge communities. Intrinsicly generate just in time infomediaries with resource maximizing deliverables. Credibly disintermediate collaborative ideas through visionary methods of empowerment.

            Globally reintermediate team building best practices with mission-critical "outside the box" thinking. Efficiently mesh synergistic manufactured products rather than turnkey e-commerce. Globally drive.',
        ),
        // end: Accordion Right content

        // begin: Enabling About Client Area
        array(
            'id'      => 'enable_about_client_area',
            'type'    => 'switcher',
            'title'   => 'Enable Client Area?',
            'label'   => 'You want to Enable this section?',
            'desc'    => 'If you want to enable client area, Select Yes',
            'default' => true,
        ),
        // end: Enabling About Client Area

    ), // end: fields
 ); // end: About Theme Option

CSFramework::instance( $settings, $options );
