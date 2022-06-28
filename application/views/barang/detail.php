<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <?= $barang['nama']; ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Berat: <?= $barang['berat']; ?></li>
            <li class="list-group-item">Jumlah: <?= $barang['jumlah']; ?></li>
            <li class="list-group-item">Harga: <?= $barang['harga']; ?></li>
        </ul>
    </div>
    <a href="<?= base_url('barang'); ?>" class="badge text-decoration-none text-bg-primary">Kembali</a>
</div>