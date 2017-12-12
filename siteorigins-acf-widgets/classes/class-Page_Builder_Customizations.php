<?php
class Page_Builder_Customizations{

    function __construct(){
        add_action('siteorigin_widgets_widget_folders', array($this, 'add_widget_folders'));
        add_filter('siteorigin_panels_widgets', array($this, 'remove_widgets'));
    }

    function add_widget_folders( $folders ){
        $folders[] = NCFGEARS_EDITING_PLUGIN_DIR . 'widgets/';
        //error_log(var_export($folders,true));
        return $folders;
    }

    function remove_widgets($widgets){
        //error_log(var_export($widgets,true));
        $remove_ya = array(
            'WP_Widget_Pages',
            'WP_Widget_Calendar',
            'WP_Widget_Archives',
            'WP_Widget_Media_Audio',
            'WP_Widget_Media_Gallery',
            'WP_Widget_Meta',
            'WP_Widget_Search',
            'WP_Widget_Text',
            'WP_Widget_Categories',
            'WP_Widget_Recent_Posts',
            'WP_Widget_Recent_Comments',
            'WP_Widget_RSS',
            'WP_Widget_Tag_Cloud',
            'WP_Nav_Menu_Widget',
            'WP_Widget_Custom_HTML',
            'SiteOrigin_Panels_Widgets_PostContent',
            'SiteOrigin_Panels_Widgets_PostLoop',
            'SiteOrigin_Panels_Widgets_Layout',

            
        );

        foreach ( $remove_ya as $widget){
            unset($widgets[$widget]);
        }

        
        return $widgets;
    }

}