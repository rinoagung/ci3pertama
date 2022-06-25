<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $barang['id']; ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" value="<?= $barang['nama']; ?>" name="nama" class="form-control" name="nama" id="nama" aria-describedby="emailHelp">
        <div class="form-text text-danger"><?= form_error('nama'); ?></div>
    </div>
    <div class="mb-3">
        <label for="berat" class="form-label">Berat</label>
        <input type="text" value="<?= $barang['berat']; ?>" name="berat" class="form-control" id="berat" aria-describedby="emailHelp">
        <div class="form-text text-danger"><?= form_error('berat'); ?></div>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="text" value=" <?= $barang['jumlah']; ?>" name="jumlah" class="form-control" id="jumlah" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" value=" <?= $barang['harga']; ?>" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar</label>
        <input type="text" value="<?= $barang['gambar']; ?>" name="gambar" class="form-control" id="gambar" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Ubah</button>
</form>