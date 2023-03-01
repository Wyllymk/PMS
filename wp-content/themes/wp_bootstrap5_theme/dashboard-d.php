<?php 
/**
 * Template Name: Dashboard
*/
get_header();?>
<?php

if (isset($_POST['update-meta'])) {
    $post_id = $_POST['post-id'];
    $new_value = $_POST['meta-field'];
    update_post_meta($post_id, 'meta_key', $new_value);
  }

$current_user = wp_get_current_user();
$user = new WP_User( $current_user ->ID);
?>
<section class="content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="m-2 card card-outline card-success">
                        <div class="card-header">
                            <div class="card-tools">
                                <h5 class="text-center text-primary mt-2"><u>Complete the Projects Listed</u></h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table tabe-hover table-condensed" id="list">
                                <colgroup>
                                    <col width="5%">
                                    <col width="10%">
                                    <col width="25%">
                                    <col width="15%">
                                    <col width="15%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Project</th>
                                        <th>Description</th>
                                        <th>Project Started</th>
                                        <th>Project Due Date</th>
                                        <th>Project Status</th>
                                        <th>React</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                // The Query
                                $query = new WP_Query(array('post_type' => 'project'));
                                query_posts( $query );

                                // The Loop
                                if($query->have_posts()):
                                while ( $query->have_posts() ) : 
                                    $query->the_post();  
                                // your post content ( title, excerpt, thumb....)

                                $project_start = get_post_meta(get_the_ID(), 'project_start', true);
                                $project_end = get_post_meta(get_the_ID(), 'project_end', true);
                                $project_status = get_post_meta(get_the_ID(), 'taskbook_status_select', true);

                                $project_user_id = get_post_meta(get_the_ID(), 'project_user', true);

                                $project_user = '';
                                if ( $project_user_id ) {
                                    $user_info = get_userdata( $project_user_id );
                                    if ( $user_info ) {
                                        $project_user = $user_info->display_name;
                                    }
                                }

                                ?>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><p class="mt-2">1</p></td>
                                        <td >
                                            <p class="mt-2"><b><?php the_title();?></b></p>
                                        </td>
                                        <td>
                                            <p class="mt-0 text-truncate"><?php the_content();?></b></p>
                                        </td>

                                        <td><p class="mt-2"><b><?php echo esc_attr( $project_start ) ;?></b></p></td>
                                        <td><p class="mt-2"><b><?php echo esc_attr( $project_end ) ;?></b></p></td>
                                        <td>
                                            <p class="mt-2"><span class=''><?php echo esc_attr( $project_status ) ;?></span></p>                      
                                        </td>

                                        <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field" value="<?php echo get_post_meta(get_the_ID(), 'project_user', true); ?>">
                                                    <input type="hidden" name="post-id" value="<?php echo get_the_ID(); ?>">
                                                    <button class="btn btn-primary"type="submit" name="accepted">Accept</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field" value="<?php echo get_post_meta(get_the_ID(), 'project_user', true); ?>">
                                                    <input type="hidden" name="project-id" value="<?php echo get_the_ID(); ?>">
                                                    <button class="btn btn-primary"type="submit" name="completed">Completed</button>
                                                </form>
                                            </div>                       
                                        </td>
                                    </tr>	
                                    
                                </tbody>
                                <?php
                                    endwhile;
                                    //Reset Query
                                    wp_reset_query();
                                endif;
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--/. container-fluid -->
        </section>
<?php
?>
        


<?php get_footer();?>