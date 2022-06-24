<?php if ($this->session->flashdata()) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Barang</strong> berhasil <?= $this->session->flashdata('namasession'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<table class="table">
    <a href="<?= base_url('barang/tambah'); ?>" class="btn btn-primary">Tambah</a>
    <?php foreach ($barang as $b) : ?>
        <li><?= $b['nama']; ?><a href="<?= base_url(); ?>barang/hapus/<?= $b['id']; ?>" onclick="return confirm('Yakin?')">Hapus</a></li>
    <?php endforeach; ?>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>