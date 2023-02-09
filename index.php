<?php include_once 'config/init.php' ?>


    

<?php

$frontpage = new Template('teamplates/frontpage.php');
$db = new Database();
$job = new Job();

$frontpage->categories = $job->getCategories();
$is_category = ( isset( $_GET['category'] ) && ! empty( $_GET['category'] ) ) ? $_GET['category'] : NULL ;

if( $is_category ){
	$frontpage->cat_id = $is_category;
	$frontpage->job_list = $job->getByCategory( $is_category );
	$frontpage->title = 'Jobs in ' . $job->getCategory( $is_category )->cat_name;
} else{

	$frontpage->title = 'Job Listing';
	$frontpage->job_list = $job->getAllJobs();	
}


echo $frontpage;

?>