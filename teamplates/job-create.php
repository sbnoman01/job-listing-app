<?php include 'inc/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
                <form>
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name">
                    </div>

                    <div class="mb-3">
                        <label for="job_title" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="job_title" name="job_title">
                    </div>

                    <div class="mb-3">
                        <label for="job_salary" class="form-label">Salery</label>
                        <div class="input-group">
                            <span class="input-group-text">৳</span>
                            <input type="number" id="job_salary" class="form-control" aria-label="Amount (to the nearest Taka)" name="job_salery">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="job_salary" class="form-label">Category</label>
                        <select class="form-select" name="job_category">
                            <option value="0" selected>Choose Category</option>
                            <?php foreach( $categories as $key => $list ): ?>
                                <?php $selected_cat = ( $list->cat_id == $cat_id ) ? 'selected' : ''; ?>
                                <option value="<?php echo $list->cat_id; ?>" <?= $selected_cat; ?> ><?php echo $list->cat_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    

                    <div class="mb-3">
                        <label for="job_location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="job_location" name="job_location">
                    </div>

                    <div class="mb-3">
                        <label for="job_contact_mobile" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="job_contact_mobile" name="job_contact_mobile">
                    </div>

                    <div class="mb-3">
                        <label for="job_contact_email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="job_contact_email" name="job_contact_email">
                    </div>

                    <div class="mb-3">
                        <label for="job_description" class="form-label">Description</label>
                        <textarea class="form-control" id="job_description" name="job_description"></textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Agree with Terms and condition</label>
                    </div>
                    <button type="submit" name="create_new_job" class="btn btn-primary">Submit New job</button>
                </form>
        </div>
    </div>
</div>

<?php include 'inc/footer.php' ?>