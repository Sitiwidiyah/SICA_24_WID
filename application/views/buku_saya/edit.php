<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Buku Saya</h1>

<form action="<?= base_url('buku_saya/update'); ?>" method="post">

<input type="hidden" name="id" value="<?= $buku->id ?>">

<input type="text" name="kode_buku" value="<?= $buku->kode_buku ?>" class="form-control mb-2">

<input type="text" name="judul" value="<?= $buku->judul ?>" class="form-control mb-2">

<input type="text" name="penulis" value="<?= $buku->penulis ?>" class="form-control mb-2">

<select name="id_kategori" class="form-control mb-2">
    <?php foreach($kategori as $k): ?>
        <option value="<?= $k->id ?>"
            <?= $k->id == $buku->id_kategori ? 'selected' : '' ?>>
            <?= $k->nama_kategori ?>
        </option>
    <?php endforeach; ?>
</select>

<input type="number" name="stok" value="<?= $buku->stok ?>" class="form-control mb-2">

<button class="btn btn-primary">Update</button>

</form>

</div>