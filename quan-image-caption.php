<?php

    /**
     *   Plugin Name: Quan Image Caption
     *   Plugin URI: http://www.quandigital.com/
     *   Description: Adds a nicer image/caption shortode
     *   Version: 1
     *   License: WTFPL
     */
    
    defined( 'ABSPATH' ) or die();

    function quanImageCaption($atts, $content = null)
    {
        if (isset($atts['width'])) {
            $width = $atts['width'] == 100 ? 'full' : 'half';
        } else {
            $width = 'full';
        }

        if (isset($atts['src'])) {
            if (!is_null($content)) {
                return '<div class="content-image ' . $width . '"><img src="' . $atts['src'] . '" /><div class="caption">' . $content . '</div></div>';
            }
            return '<div class="content-image ' . $width . '"><img src="' . $atts['src'] . '" /></div>';
        } 

        return;
    }

    add_shortcode( 'caption', 'quanImageCaption' );
