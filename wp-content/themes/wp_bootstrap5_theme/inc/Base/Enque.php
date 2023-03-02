<?php
/**
 *  @package: pms plugin
 */

 namespace Inc\Base;
  class Enqueue{
    public function register(){
        add_action_('admin_enqueue_scripts',array($this, 'enqueue'));

    }
    function enqueue(){
        wp_enqueue_style('pmspluginstyle', $this-> plugin_url.'assets/pms.css');
        wp_enqueue_script('pmspluginsripts', $this-> plugin_url.'assets/pms.js');

    }
  }