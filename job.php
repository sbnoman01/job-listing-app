<?php include_once 'config/init.php' ?>


    

<?php

$job = new Job();
$template = new Template('teamplates/job-single.php');



$is_job_id = ( isset( $_GET['id'] ) && ! empty( $_GET['id'] ) ) ? $_GET['id'] : NULL ;

$template->job_single = $job->getJob($is_job_id);



echo $template;

?>