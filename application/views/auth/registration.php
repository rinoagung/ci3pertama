<div class="container mt-5">
    <div class="row mt-5">
        <div class="m-auto mt-5 col-10 col-md-8 col-lg-6 col-xl-4">
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                </div>
                <div class="mb-3">
                    <label for="password1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password1" name="password1">
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label">Repeat Password</label>
                    <input type="password" class="form-control" id="password2" name="password2">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <div id="emailHelp" class="form-text"><a href="<?= base_url('auth'); ?>">Back</a></div>
        </div>
    </div>
</div>