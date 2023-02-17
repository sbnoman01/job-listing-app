<?php include_once 'config/init.php';

$job = new Job();
$template = new Template('teamplates/job-single.php');

// Check if delete job request
if( isset($_REQUEST['delete_job'] )){
    $job_id = $_REQUEST['job_id'];

    // check if delete
    if( $job->delete( $job_id ) ){
        redirect('index.php', 'Job has deleted', 'success');
    }else{
        redirect('index.php', 'Deleted error', 'error');
    }

}


$is_job_id = ( isset( $_GET['id'] ) && ! empty( $_GET['id'] ) ) ? $_GET['id'] : NULL ;
$template->job_single = $job->getJob($is_job_id);

echo $template;

?>