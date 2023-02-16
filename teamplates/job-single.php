
<?php include 'inc/header.php' ?>



<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-2">
			<img src="assets/single-job.jpg" alt="" class="h-50 w-100 object-fit-cover">
			<div class="job-single-details mt-5">
				<h3 class="border-bottom pb-2">Job Name: <?= $job_single->job_title ?></h3>
				<div class="row">
					<div class="col-md-8">
						<div class="job-description pt-2 border-right">
							<p><?= $job_single->job_desc ?></p>
						</div>
					</div>
					<div class="col-md-4">
						<ul>
							<li class="border-bottom pb-2"><strong>Salery:</strong> <?= $job_single->job_salery . 'k৳'?></li>
							<li class="border-bottom pb-2"><strong>Company:</strong> <?= $job_single->company_name ?></li>
							<li class="border-bottom pb-2"><strong>Mobile:</strong> <?= $job_single->user_contact ?></li>
							<li class="border-bottom pb-2"><strong>Email:</strong> <?= $job_single->email_contact ?></li>
							<li class=""><strong>Location:</strong> <?= $job_single->job_location ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 

 <?php include 'inc/footer.php' ?>
