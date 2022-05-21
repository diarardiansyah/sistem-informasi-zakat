<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
    <div class="col-lg-6">
        <?= $this->session->flashdata('flash'); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <form action="<?= base_url('user/changePassword'); ?>" method="post">
            <div class="form-group">
                <label for="current_password">Current Password : </label>
                <input type="password" class="form-control" id="current_password" name="current_password">
                <small class="text-form text-danger"><?= form_error('current_password'); ?></small>
            </div>
            <div class="form-group">
                <label for="new_password1">New Password : </label>
                <input type="password" class="form-control" id="new_password1" name="new_password1">
                <small class="text-form text-danger"><?= form_error('new_password1'); ?></small>
            </div>
            <div class="form-group">
                <label for="new_password2">Repeat New Password : </label>
                <input type="password" class="form-control" id="new_password2" name="new_password2">
                <small class="text-form text-danger"><?= form_error('new_password2'); ?></small>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Change Password</button>
            </div>
        </form>
    </div>
</div>
   
</div>
<!-- /.container-fluid -->

        
<!-- End of Main Content -->

        