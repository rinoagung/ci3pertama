<nav class="navbar navbar-expand-lg bg-light mb-5">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="" width="30" height="30" class="d-inline-block align-text-top">
            Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('home'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('barang'); ?>">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('user'); ?>">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= base_url('auth/logout'); ?>">Logout</a>
                </li>
            </ul>
            <form class="d-flex" action="" method="POST" role="search">
                <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search" autocomplete="off" autofocus>
                <input class="btn btn-outline-success" type="submit" name="submit"></input>
            </form>
        </div>
    </div>
</nav>