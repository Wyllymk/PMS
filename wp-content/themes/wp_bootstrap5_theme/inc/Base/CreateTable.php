<?php
/**
 * @package   Cris plugin
 */

 namespace Inc\Base;

 class MyDB{

    function register(){

        $this->pass_data_to_project_table();
    }

    function create_project_table(){
        global $wpdb;
        $table = 'wp_project_table';
        $charset_collate = $wpdb->get_charset_collate();

        $project_table_details = "CREATE TABLE $table(
            ID bigint unsigned NOT NULL auto_increment,
            projectname text NOT NULL,
            task text NOT NULL,
            startdate varchar(35) NOT NULL,
            duedate VARCHAR(20) NOT NULL,
            PRIMARY KEY (ID)
        ) $charset_collate;";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($project_table_details);
    }

    function pass_data_to_project_table(){
        if(isset($_POST['savechanges'])){
            $data = array(
                'projectName' => $_POST['projectName'],
                'task'  =>  $_POST['task'],
                'startDate'     =>  $_POST['startDate'],
                'dueDate'   => $_POST['dueDate'], 

            );
            global $wpdb;
            $table = 'wp_project_table';
            $result = $wpdb->insert($table, $data, $format=NULL);
            
            if($result==true){
                echo '<script>alert("Submitted Successfully");</script>' ;
            }else{
                echo '<script>alert("Try again");</script>' ;
            }
        }
    }
}