<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Data Buku</h1>

<!-- 🔥 TOMBOL TAMBAH -->
<a href="<?= base_url('buku/tambah'); ?>" class="btn btn-primary mb-3">
    Tambah Buku
</a>
<a href="<?= base_url('laporan/buku'); ?>" target="_blank" class="btn btn-success mb-3">
    Cetak Laporan
</a>
<table class="table table-bordered" id="dataTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Lokasi Rak</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
    <?php $no=1; foreach($buku as $b): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $b->kode_buku ?></td>
            <td><?= $b->judul ?></td>
            <td><?= $b->penulis ?></td>
            <td><?= $b->penerbit ?></td>
            <td><?= $b->tahun ?></td>
            <td><?= $b->nama_kategori ?></td>
            <td><?= $b->stok ?></td>
            <td><?= $b->lokasi_rak ?></td>

            <td>
                <a href="<?= base_url('buku/hapus/'.$b->id); ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin hapus data ini?')">
                   Hapus
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>

</div>