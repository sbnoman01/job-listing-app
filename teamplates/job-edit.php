<?php include 'inc/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
                <form method="POST">
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" value="<?= $job_single->company_name; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="job_title" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" value="<?= $job_single->job_title; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="job_salary" class="form-label">Salery</label>
                        <div class="input-group">
                            <span class="input-group-text">৳</span>
                            <input type="number" id="job_salary" class="form-control" aria-label="Amount (to the nearest Taka)" name="job_salery" value="<?= $job_single->job_salery; ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="job_salary" class="form-label">Category</label>
                        <select class="form-select" name="job_category">
                            <option value="0" selected>Choose Category</option>
                            <?php foreach( $categories as $key => $list ): ?>
                                <?php $selected_cat = ( $list->cat_id == $job_single->cat_id ) ? 'selected' : ''; ?>
                                <option value="<?php echo $list->cat_id; ?>" <?= $selected_cat; ?> ><?php echo $list->cat_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    

                    <div class="mb-3">
                        <label for="job_location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="job_location" name="job_location" value="<?= $job_single->job_location; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="job_contact_mobile" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="job_contact_mobile" name="job_contact_mobile" value="<?= $job_single->user_contact; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="job_contact_email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="job_contact_email" name="job_contact_email" value="<?= $job_single->email_contact; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="job_description" class="form-label">Description</label>
                        <textarea class="form-control" id="job_description" name="job_description"><?= $job_single->job_desc; ?></textarea>
                    </div>

                    <button type="submit" name="update_job" class="btn btn-primary">Update Job</button>
                </form>
        </div>
    </div>
</div>

<?php include 'inc/footer.php' ?>