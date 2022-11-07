<?php

/**
 * Plugin Name:       We Tuts
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       A Basic Plugin Journey Beggins now
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Himel Islam
 * Author URI:        https://himelislam.com/
 * License:           GPL v2 or later
 */

 // dont call the file directly
 if(!defined('ABSPATH') ) exit;


 function wetuts_seo_tags (){
    ?>
    <!--wetuts seo plugins--->
    <meta name="description" content="Himel Islam | Web application developer">
    <meta name="keywords" content="php, ajax, jQuery, php5, wordpress">
    <!--wetuts seo plugins--->
    <?php    
 }

 add_action( 'wp_head', 'wetuts_seo_tags');
