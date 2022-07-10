<div class="container my-5">
    <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
    <?= form_open_multipart('user/edit'); ?>
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" value="<?= $user['name']; ?>" name="name" class="form-control" name="name" id="name" aria-describedby="emailHelp">
        <div class="form-text text-danger"><?= form_error('name'); ?></div>

    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" value="<?= $user['username']; ?>" name="username" class="form-control" id="username" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" value=" <?= $user['email']; ?>" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 row d-flex align-items-center">
        <div class="col-2">
            <label for="image" class="form-label">Image</label>
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="">
        </div>
        <div class="col-8">
            <div class="mb-3">
                <input class="form-control form-control-sm" name="image" value="<?= $user['image']; ?>" id="image" type="file">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
    <a href="<?= base_url('barang'); ?>" class="badge text-decoration-none text-bg-primary">Back</a>

</div>