<div class="container mt-5">
    <?= $this->session->flashdata('message'); ?>
    <div class="row mt-5">
        <div class="m-auto mt-5 col-10 col-md-8 col-lg-6 col-xl-4">
            <form method="post" action="<?= base_url('auth'); ?>">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" autofocus>
                    <div class="form-text text-danger"><?= form_error('username'); ?></div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <div class="form-text text-danger"><?= form_error('password'); ?></div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <div class="d-flex mt-3 justify-content-between">
                <div class="form-text"><a href="">Forgot Password</a></div>
                <div class="form-text"><a href="<?= base_url('auth/registration'); ?>">Register</a></div>
            </div>
        </div>
    </div>
</div>