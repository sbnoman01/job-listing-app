<?php include_once 'config/init.php';

$template = new Template('teamplates/job-create.php');
$job = new Job();

// Get Variables
if( isset( $_REQUEST['create_new_job'] ) ){
    $data = [];
    $data['company_name'] = $_REQUEST['company_name'];
    $data['job_title'] = $_REQUEST['job_title'];
    $data['job_salery'] = $_REQUEST['job_salery'];
    $data['job_category'] = $_REQUEST['job_category'];
    $data['job_location'] = $_REQUEST['job_location'];
    $data['job_contact_mobile'] = $_REQUEST['job_contact_mobile'];
    $data['job_contact_email'] = $_REQUEST['job_contact_email'];
    $data['job_description'] = $_REQUEST['job_description'];

    if( $job->create( $data ) ){
        redirect('index.php', 'Your Job has been listed', 'success');
    } else{
        redirect('index.php', 'Something Wrong', 'error');
    }
}


$template->categories = $job->getCategories();
$template->data = $ss;

echo $template;

?>