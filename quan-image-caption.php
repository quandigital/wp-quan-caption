<?php

    /**
     *   Plugin Name: Quan Image Caption
     *   Plugin URI: http://www.quandigital.com/
     *   Description: Adds a nicer image/caption shortode
     *   Version: 1
     *   License: WTFPL
     */
    
    defined( 'ABSPATH' ) or die( 'Die! Die!' );

    function quanImageCaption($atts, $content = null)
    {
        if (isset($atts['width'])) {
            $width = $atts['width'] == 100 ? 'full' : 'half';
        } else {
            $width = 'full';
        }

        if (isset($atts['caption'])) {
            return '<div class="image ' . $width . '">' . $content . '<div class="caption">' . $atts['caption'] . '</div></div>';
        }

        return '<div class="image ' . $width . '">' . $content . '</div>';
    }

    add_shortcode( 'caption', 'quanImageCaption' );
