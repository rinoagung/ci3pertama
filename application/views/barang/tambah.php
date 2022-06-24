<form action="" method="POST">
    <?php if (validation_errors()) : ?>
        <div class="text-danger">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" name="nama" id="nama" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="berat" class="form-label">Berat</label>
        <input type="text" name="berat" class="form-control" id="berat" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" id="jumlah" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar</label>
        <input type="text" name="gambar" class="form-control" id="gambar" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>