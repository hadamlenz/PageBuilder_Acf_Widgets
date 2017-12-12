<?php

class Acf_PageBuilder_Widget extends SiteOrigin_Widget{

    function __construct( $id, $name, $widget_options, $control_options, $form_options, $base_folder){
        //just pass that stuff right off to the actual class, this just adds the extra ACF stuff
        parent::__construct($id, $name, $widget_options, $control_options, $form_options, $base_folder);
        add_filter('acf/load_value', array($this, 'acf_load_value'), 10, 3);
    }

    public function acf_load_value( $value, $post_id, $field  ){  
        $instance = $_REQUEST['instance'];
        if( $instance ){
            $instance = stripslashes_deep( $instance );
            $instance = json_decode( $instance );
            $sow_form_id = $instance->_sow_form_id;
            //error_log( var_export( $sow_form_id, true ));
            $ref = parse_url( wp_get_referer() );
            parse_str( $ref['query'], $query_parts);
            $panels_data = get_post_meta( $query_parts['post'], 'panels_data', true );
           
            if( $panels_data && $sow_form_id  ){
                //error_log(var_export($panels_data['widgets'],true));
                foreach( $panels_data['widgets'] as $widget ){
                    if( $sow_form_id === $widget['_sow_form_id'] ){
                        return $widget['acf'][$field['key']];
                    }
                }
            }
        }
        return $value;
    }
}