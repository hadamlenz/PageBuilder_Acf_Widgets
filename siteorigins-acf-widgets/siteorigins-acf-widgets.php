<?php
/*
Plugin Name: PageBuilder (by Site Origin) ACF Widgets
Plugin URI: https://ncf.edu
Description: Allows you to create ACF Fields Groups that can be used as Page Builder Widgets
Version: 0.1
Author: Adrock42
Author URI: https://hadamlenz.wordpress.com
License: GPL3
License URI: http://www.gnu.org/licenses/gpl.html
*/

define('NCFGEARS_EDITING_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define('NCFGEARS_EDITING_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

class PageBuilder_Acf_Widgets{
    public $pagebuilder;

    function __construct(){
        spl_autoload_register(function ($class) {
            $file =  '/classes/class-' . $class . '.php';
            
            if (file_exists(plugin_dir_path(__FILE__) . $file))
                include_once(plugin_dir_path(__FILE__) . $file);
        });
        $this->pagebuilder = new Page_Builder_Customizations();
    }
}

new PageBuilder_Acf_Widgets();