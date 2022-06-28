<div class="container">
    <?php if ($this->session->flashdata()) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Barang</strong> berhasil <?= $this->session->flashdata('namasession'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (empty($barang)) : ?>
        <div class="alert alert-info" role="alert">
            Barang tidak ditemukan
        </div>
    <?php else : ?>
        <table class="table">
            <a href="<?= base_url('barang/tambah'); ?>" class="btn btn-primary">Tambah</a>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col" class="text-center">Manage</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barang as $b) : ?>
                    <tr>
                        <th scope="row"><?= ++$start; ?></th>
                        <td><?= $b['nama']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>barang/hapus/<?= $b['id']; ?>" style="display: inline-block; margin:10px" onclick="return confirm('Yakin?')">Hapus</a>
                            <a href="<?= base_url(); ?>barang/detail/<?= $b['id']; ?>" style="display: inline-block; margin:10px">Detail</a>
                            <a href="<?= base_url(); ?>barang/ubah/<?= $b['id']; ?>" style="display: inline-block; margin:10px">Ubah</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h5>Result: <?= $total_rows; ?></h5>
        <?= $this->pagination->create_links(); ?>
    <?php endif; ?>
</div>