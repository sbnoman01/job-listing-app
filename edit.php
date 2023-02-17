<?php include_once 'config/init.php';

$template = new Template('teamplates/job-edit.php');
$job = new Job();

// Recieve Job Id
$job_id = ( isset( $_GET['id'] ) && ! empty( $_GET['id'] ) ) ? $_GET['id'] : NULL ;

// Get Variables
if( isset( $_REQUEST['update_job'] ) ){
    $data = [];
    $data['company_name'] = $_REQUEST['company_name'];
    $data['job_title'] = $_REQUEST['job_title'];
    $data['job_salery'] = $_REQUEST['job_salery'];
    $data['job_category'] = $_REQUEST['job_category'];
    $data['job_location'] = $_REQUEST['job_location'];
    $data['job_contact_mobile'] = $_REQUEST['job_contact_mobile'];
    $data['job_contact_email'] = $_REQUEST['job_contact_email'];
    $data['job_description'] = $_REQUEST['job_description'];

    if( $job->update($job_id, $data ) ){
        redirect('index.php', 'Job Has been updated', 'success');
    } else{
        redirect('index.php', 'Something Wrong', 'error');
    }
}

$template->job_single = $job->getJob($job_id);
$template->categories = $job->getCategories();

echo $template;

?>