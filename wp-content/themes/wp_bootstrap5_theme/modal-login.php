<?php 
/**
 * Template Name: Modal
*/
get_header();?>
<?php

if (isset( $_POST['cpt_nonce_field'] ) && wp_verify_nonce( $_POST['cpt_nonce_field'], 'cpt_nonce_action' ) ) {

    // Check if the user already has an assigned project
    $developer_id = $_POST['user'];
    $assigned_projects = get_posts( array(
        'post_type' => 'project',
        'meta_query'    => array(
            [
                'key'   => 'project_user',
                'value' => $developer_id,
            ],
            [
                'key'   => 'project_status_select',
                'value' => array( 'Pending', 'In Progress' ),
                'compare' => 'IN',
            ],
        ),
    ) );

    if ( ! empty( $assigned_projects ) ) {
        // Developer already has an assigned project, don't assign another
        $alert_type = 'danger';
        $alert_message = 'Developer already has an assigned project.';
    } else {
        // create post object with the form values
                // Create a new project post
        $project_title = sanitize_text_field($_POST['title']);
        $project_content = sanitize_text_field($_POST['content']);
        $project_start_date = sanitize_text_field($_POST['start']);
        $project_due_date = sanitize_text_field($_POST['deadline']);
        $project_status = 'Pending';
        $project_user = intval($_POST['user']);

        $new_project = array(
            'post_title'    => $project_title,
            'post_content'  => $project_content,
            'post_status'   => 'publish',
            'post_type'     => $_POST['project'],
            'meta_input'    => array(
                'project_start' => $project_start_date,
                'project_end' => $project_due_date,
                'project_status_select' => $project_status,
                'project_user' => $project_user,
            ),
        );
        // insert the post into the database
        $project_start = $_POST['start'];

        $project_id = wp_insert_post( $new_project);
        //add_post_meta($cpt_id,'project_start',$project_start);
        if ($project_id) {
            $alert_type = 'success';
            $alert_message = 'Project assigned successfully.';
        } else {
            $alert_type = 'danger';
            $alert_message = 'Error assigning project. Please try again.';
        }
    }

}

?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form class="p-3 mb-2 text-black" id="form1" action="" method="post">
                <?php if (isset($alert_message)) : ?>
                    <div class="alert alert-<?php echo $alert_type; ?> mb-3" role="alert">
                        <?php echo $alert_message; ?>
                    </div>
                <?php endif; ?>
                <h3 class="text-body">New Project</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-2">
                            <label for="title"><?php _e('Enter the Project Title:', 'mytextdomain'); ?></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Project Title">
                        </div>
                        <div class="form-group mt-2">
                            <label for="start_date">Start Date:</label>
                            <input type="date" class="form-control" id="start_date" name="start" placeholder="Enter Project Start Date here">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-2">
                            <label for="content"><?php _e('Enter the Project Description:', 'mytextdomain'); ?></label>
                            <textarea rows="3" class="form-control" id="content" name="content" placeholder="Enter Project Description here"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="due_date">Due Date:</label>
                            <input type="date" class="form-control" id="due_date" name="deadline" placeholder="Enter Project Deadline here">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" id="user" name="user">
                        <option value="">Select Developer</option>
                        <?php foreach ($user_options as $user_id => $user_name) : ?>
                            <option value="<?php echo $user_id; ?>"><?php echo $user_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mt-2 text-center">
                    <button class="btn btn-primary px-5" id="btn1" type="submit"><?php _e('Submit', 'mytextdomain') ?></button>
                    <input type='hidden' name='project' id='project' value='project' />
                </div>
                <?php wp_nonce_field('cpt_nonce_action', 'cpt_nonce_field'); ?>
            </form>
        </div>
    </div>
</div> 
<style>
    .form-group {
        margin-bottom: 0.5rem;
    }

    #btn1 {
        margin-top: 1rem;
    }
</style> 

<?php get_footer();?>