<?php include_once 'config/init.php' ?>


    

<?php


$frontpage = new Template('teamplates/frontpage.php');
$db = new Database();
$job = new Job();

$frontpage->job_list = $job->getAllJobs();
echo $frontpage;

?>

