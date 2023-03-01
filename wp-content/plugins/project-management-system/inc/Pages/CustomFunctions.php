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


}