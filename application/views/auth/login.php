<div class="container mt-5">
    <div class="row mt-5">
        <div class="m-auto mt-5 col-10 col-md-8 col-lg-6 col-xl-4">
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <div class="d-flex mt-3 justify-content-between">
                <div id="emailHelp" class="form-text"><a href="">Forgot Password</a></div>
                <div id="emailHelp" class="form-text"><a href="<?= base_url('auth/registration'); ?>">Register</a></div>
            </div>
        </div>
    </div>
</div>