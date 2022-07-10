<div class="container my-5">
    <?= $this->session->flashdata('message'); ?>

    <div class="card m-auto" style="width: 18rem;">
        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $user['name']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $user['username']; ?></h6>
            <p class="card-text"><?= $user['email']; ?></p>
            <a href="<?= base_url('barang'); ?>" class="card-link badge text-decoration-none text-bg-primary">Back</a>
            <a href="<?= base_url('user/edit'); ?>" class="card-link">Edit</a>
        </div>
    </div>
</div>