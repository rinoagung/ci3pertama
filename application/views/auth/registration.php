<div class="container mt-5">
    <div class="row mt-5">
        <div class="m-auto mt-5 col-10 col-md-8 col-lg-6 col-xl-4">
            <form method="post" action="<?= base_url('auth/registration'); ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>" autofocus>
                    <div class="form-text text-danger"><?= form_error('name'); ?></div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                    <div class="form-text text-danger"><?= form_error('email'); ?></div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>">
                    <div class="form-text text-danger"><?= form_error('username'); ?></div>
                </div>
                <div class="mb-3">
                    <label for="password1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password1" name="password1">
                    <div class="form-text text-danger"><?= form_error('password1'); ?></div>

                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label">Repeat Password</label>
                    <input type="password" class="form-control" id="password2" name="password2">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <div class="form-text"><a href="<?= base_url('auth'); ?>">Back</a></div>
        </div>
    </div>
</div>