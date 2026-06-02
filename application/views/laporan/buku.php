<div class="container-fluid">

    <h3>Laporan Data Buku</h3>

    <?php $kategori_id = isset($kategori_id) ? $kategori_id : ''; ?>

    <form method="get">

        <div class="row mb-3">

            <div class="col-md-3">

                <select name="kategori" class="form-control">

                    <option value="">-- Pilih Kategori --</option>

                    <?php foreach($kategori as $k): ?>

                        <option value="<?= $k->id; ?>"
                        <?= ($kategori_id == $k->id) ? 'selected' : ''; ?>>

                            <?= $k->nama_kategori; ?>

                        </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="col-md-6">

                <button type="submit" class="btn btn-primary btn-sm">
                    Filter
                </button>

                <a href="<?= site_url('laporan/buku'); ?>"
                class="btn btn-secondary btn-sm">
                    Reset
                </a>

                <a href="<?= site_url('laporan/cetak_buku?kategori='.$kategori_id); ?>"
                target="_blank"
                class="btn btn-success btn-sm">
                    Cetak PDF
                </a>

            </div>

        </div>

    </form>

    <table class="table table-bordered mt-3">

        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Stok</th>
        </tr>

        <?php $no=1; foreach($data as $d): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->kode_buku; ?></td>
            <td><?= $d->judul; ?></td>
            <td><?= $d->penulis; ?></td>
            <td><?= $d->nama_kategori; ?></td>
            <td><?= $d->stok; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

</div>