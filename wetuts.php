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
if (!defined('ABSPATH')) exit;


function wetuts_contact_form($atts, $content, $shortcode){
   var_dump($atts, $content, $shortcode);
}

add_shortcode('wetuts_contact', 'wetuts_contact_form');
































// if (is_admin()) {
//    require_once dirname(__FILE__) . '/includes/admin/profile.php';
// }


// function wetuts_seo_tags()
// {
// ?>
//    <!--wetuts seo plugins--->
//    <meta name="description" content="Himel Islam | Web application developer" />
//    <meta name="keywords" content="php, ajax, jQuery, php5, wordpress" />
//    <!--wetuts seo plugins--->
// <?php
// }

// add_action('wp_head', 'wetuts_seo_tags');

// function wetuts_wp_footer()
// {
//    echo '<h1>Hello We buddy<h1/>';
// }

// add_action('wp_footer', 'wetuts_wp_footer', 9999);

// function wetuts_author_bio($content)
// {
//    global $post;


//    $author = get_user_by('id', $post->post_author);

//    $bio = get_user_meta($author->ID, 'description', true);
//    $twitter = get_user_meta($author->ID, 'twitter', true);
//    $facebook = get_user_meta($author->ID, 'facebook', true);
//    $linkedin = get_user_meta($author->ID, 'linkedin', true);

//    ob_start();
// ?>
//    <div class="wetuts-bio-wrap">

//       <div class="avatar-image">
//          <?php // echo get_avatar($author->ID, 64); ?>
//       </div>

//       <div class="wetuts-bio-content">
//          <div class="author-name"><?php echo $author->display_name; ?></div>

//          <div class="wetuts-author-bio">
//             <?php // echo wpautop(wp_kses_post($bio)); ?>
//          </div>

//          <ul class="wetuts-socials">
//             <?php if ($twitter) { ?>
//                <li><a href="<?php // echo esc_url($twitter); ?>"><?php // _e('Twitter', 'wetuts'); ?></a></li>
//             <?php } ?>

//             <?php if ($facebook) { ?>
//                <li><a href="<?php // echo esc_url($facebook); ?>"><?php // _e('Facebook', 'wetuts'); ?></a></li>
//             <?php } ?>

//             <?php if ($linkedin) { ?>
//                <li><a href="<?php // echo esc_url($linkedin); ?>"><?php // _e('LinkedIn', 'wetuts'); ?></a></li>
//             <?php } ?>
//          </ul>
//       </div>
//    </div>
// <?php

//    $bio_content = ob_get_clean();

//    return $content . $bio_content;
// }

// add_filter('the_content', 'wetuts_author_bio');

// function wetuts_enqueue_scripts()
// {
//    wp_enqueue_style('wetuts-style', plugins_url('assets/css/style.css', __FILE__));
// }

// add_action('wp_enqueue_scripts', 'wetuts_enqueue_scripts');


// function wetuts_page_content_top(){
//    echo '<h1>I am at Top</h1>';
// }

// add_action('wetuts_page_content_top', 'wetuts_page_content_top');


// function wetuts_page_content_bottom(){
//    echo '<h1>I am at Bottom</h1>';
// }

// add_action('wetuts_page_content_bottom', 'wetuts_page_content_bottom');
// function wetuts_page_content_top(){
//    echo '<h1>I am at Top</h1>';
// }

// add_action('wetuts_page_content_top', 'wetuts_page_content_top');


// function wetuts_page_content_bottom(){
//    echo '<h1>I am at Bottom</h1>';
// }

// add_action('wetuts_page_content_bottom', 'wetuts_page_content_bottom');