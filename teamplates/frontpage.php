
<?php include 'inc/header.php' ?>

	<div class="container">
      <div class="bg-danger-subtle p-4 text-center rounded">
        <h1>List your jobs</h1>
        <p class="lead w-50 m-auto mb-3">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <div class="filter-search w-50 m-auto">
          <!-- Job Filter From -->
          <form action="index.php" method="GET">
          <label for="cat_select" class="form-label fw-bold">Filter By Category</label>
            <select class="cat-select form-select" onchange="this.form.submit()">
              <option value="0" selected>Choose Category</option>
              <?php foreach( $categories as $key => $list ): ?>
                <option value="<?php echo $list->cat_id; ?>"><?php echo $list->cat_name; ?></option>
              <?php endforeach; ?>
            </select>
          </form>      
          
        </div>
      </div>

      <div class="row marketing align-items-center justify-content-center pt-5">
        <div class="col-md-12">
          <?php foreach( $job_list as $key => $job ): ?>
            <div class="row job-item" id="job-id-<?php echo $job->job_id; ?>">
              <div class="col-md-11">
                <h4><?php echo $job->job_title; ?></h4>
                <p><?php echo $job->job_desc; ?></p>
              </div>
              <div class="col-md-1">
                  <div class="btn btn-primary">View</div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        

      </div>
    </div> <!-- /container -->

<?php include 'inc/footer.php' ?>