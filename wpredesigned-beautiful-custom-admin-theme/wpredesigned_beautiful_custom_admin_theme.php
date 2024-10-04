<?php
   /*
   Plugin Name: WpRedesigned - Beautiful Custom Admin Theme
   Plugin URI: http://wpmagg.com/portfolio/wpredesigned-beautiful-custom-admin-theme/
   description: Beautify your WordPress admin :)
   Version: 1.0
   Author: wpmagg
   Author URI: http://wpmagg.com
   License: GPL2
   */


        // block direct access to php files
        defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );

        // let’s start by enqueuing our styles correctly	
        function wpmagg_change_admin_css() {
                wp_register_style( 'add-extra-admin-stylesheet', plugins_url( '/css/style.css', __FILE__ ) );
                wp_enqueue_style( 'add-extra-admin-stylesheet' );
        }

        // hook styles to the admin screens
        if (is_admin()) {
                add_action( 'admin_enqueue_scripts', 'wpmagg_change_admin_css' );
        }