<?php
/**
 * @package PMS
 */

namespace Inc\Pages;

class CustomFunctions{

    public $template;

    public function register(){
        add_filter( 'login_redirect', array($this, 'my_login_redirect'), 10, 3);
        add_action('after_setup_theme', array($this, 'remove_admin_bar'));
        add_action( 'save_post_project', array($this, 'save_project_user'), 10, 3 );
        add_filter( 'user_has_cap', array($this, 'check_project_user_capability'), 10, 4 );
        //add_shortcode( 'custom_links', array($this, 'custom_links_shortcode' ));
        add_filter('wp_nav_menu_items', array($this, 'crunchify_add_login_logout_menu'), 10, 2);

    }

    
    /**
     * Redirect user after successful login.
     */
    function my_login_redirect( $redirect_to, $request, $user ) {
        //is there a user to check?
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
            //check for admins
            if ( in_array( 'administrator', $user->roles ) ) {
                // redirect them to the default place
                return $redirect_to;
            } else {
                return esc_url(home_url( '/dashboard'));
            }
        } else {
            return $redirect_to;
        }
    }

    //HIDE ADMIN BAR FOR ALL EXCEPT ADMINISTRATOR

    function remove_admin_bar() {
        if (!current_user_can('administrator') && !is_admin()) {
            show_admin_bar(false);
        }
    }

    // Save assigned user as post meta when a project is created or updated
    function save_project_user( $post_id, $post, $update ) {
        // Check if the current user is a project manager or administrator
        if ( !current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        // Check if the "project_user" field is set
        if ( isset( $_POST['project_user'] ) ) {
            // Sanitize the user ID
            $assigned_user = sanitize_text_field( $_POST['project_user'] );

            // Update the "assigned_user" post meta
            update_post_meta( $post_id, 'assigned_user', $assigned_user );
        }
    }

    function check_project_user_capability( $allcaps, $caps, $args, $user ) {
        global $post;
      
        // Make sure we have a post object
        if ( ! isset( $post ) ) {
          return $allcaps;
        }
      
        // Get the assigned user ID from the project meta
        $assigned_user_id = get_post_meta( $post->ID, 'project_user', true );
      
        // Get the current user
        $current_user = wp_get_current_user();
      
        // Check if the current user is the project manager or the assigned user
        if ( in_array( 'project_manager', $current_user->roles ) || $assigned_user_id == $current_user->ID ) {
          // Allow project manager and assigned user to view the project
          return $allcaps;
        }
      
        // Deny access to other users
        $allcaps['read_private_posts'] = false;
        return $allcaps;
      }
      
      function custom_links_shortcode( $atts ) {
        $atts = shortcode_atts(array('login_txt' => 'Login','profile_txt' => 'My profile','redirect' => '',),$atts);
        if(is_user_logged_in()) { $gotolink= ($atts['redirect']!='') ? $atts['redirect']  : get_edit_profile_url(); echo '<a href="'.$gotolink.'">'.$atts['profile_txt'].'</a>';}
        else echo '<a href="'.wp_login_url($atts['redirect']).'">'.$atts['login_txt'].'</a>';
    }

function crunchify_add_login_logout_menu($items, $args) {
        ob_start();
        wp_loginout('index.php');
        $loginoutlink = ob_get_contents();
        ob_end_clean();
        $items .= '<li style=" float: right;">'. $loginoutlink .'</li>';
    return $items;
}

}