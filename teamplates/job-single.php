
<?php include 'inc/header.php' ?>



<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-2">
			<img src="assets/single-job.jpg" alt="" class="h-50 w-100 object-fit-cover">
			<div class="job-single-details mt-5">
				<h3 class="border-bottom pb-2">Job Name: <?= $job_single->job_title ?></h3>
				<div class="row">
					<div class="col-md-8">
						<div class="job-description pt-2 border-right border-bottom">
							<p ><?= $job_single->job_desc ?></p>
						</div>
						<div class="single-actions pt-2">
							<a href="edit.php?id=<?= $job_single->job_id; ?>" class="btn btn-primary">Edit</a>

							<form action="job.php" method="post" class="d-inline">
								<input type="hidden" name="job_id" value="<?= $job_single->job_id; ?>">
								<input type="submit" name="delete_job" class="btn btn-danger" value="Delete">
							</form>
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
