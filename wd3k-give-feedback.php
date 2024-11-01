<?php
/*
Plugin Name: WD3K Give Feedback
Plugin URI: http://www.webdev3000.com/
Description: Creates Give Feedback button in the right bottom corner of the post page. After click, redirects user to the comment box.
Author: Csaba Kissi
Version: 0.92
Author URI: http://www.webdev3000.com
*/

function wd3k_give_feedback_init() {
    if(!is_admin())
    {
        //wp_deregister_script('jquery');
        //wp_register_script('jquery', '<a class="linkifierplus" href="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js</a>', false, '1.4.2', false);
        //wp_enqueue_script('jquery');
    }
    wp_register_script('wd3k_give_feedback', plugins_url('wd3k-give-feedback.js', __FILE__));
    wp_enqueue_script( 'wd3k_give_feedback' );
}

function wd3k_give_feedback_footer() {
    if(is_single()) {
    ?>
        <a href="#respond"><div id="wd3k_feedback" style="position: fixed; bottom: 0px; right: 0px; cursor: pointer; opacity: 1; " title="Scroll Back to Top"><img src="<?php echo plugins_url('images/feedback-corner.png', __FILE__) ?>"></div></a>
    <?php
    }
}

add_action('init', 'wd3k_give_feedback_init');
add_action('wp_footer', 'wd3k_give_feedback_footer');