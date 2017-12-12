<?php
/*
Widget Name: Widget Template
Description: stuff.
Author: Me
Author URI: http://example.com
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class Widget_Name extends Acf_PageBuilder_Widget {
    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'widget-name',
    
            // The name of the widget for display purposes.
            __('Widget Name', 'widget-name-text-domain'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Widget Name.', 'acf-page-tout-text-domain'),
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}
    
siteorigin_widget_register('acf-page-tout', __FILE__, 'Widget_Name');