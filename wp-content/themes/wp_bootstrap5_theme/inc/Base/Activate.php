<?php
/**
 *  @package: pms plugin
 */

 class Activate {
    public static function activate(){
        flush_rewrite_rules();
    }
 }