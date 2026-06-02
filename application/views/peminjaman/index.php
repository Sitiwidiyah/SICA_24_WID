<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Data Kategori</h2>

<!-- ALERT -->
<?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success">
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<a href="<?= site_url('peminjaman/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">

<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

<tbody>
<?php $no=1; foreach($data as $d): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d->kode_peminjaman; ?></td>
        <td><?= $d->nama; ?></td>
        <td><?= $d->tanggal_pinjam; ?></td>
        <td><?= $d->status; ?></td>
        <td>
            <?php 
            $today = date('Y-m-d');

            $selisih = strtotime($today) - strtotime($d->tanggal_jatuh_tempo);

            $terlambat = $selisih > 0
            ? floor($selisih / 86400)
            : 0;
        ?>    

    <?php if($d->status=='dipinjam'): ?>

        <a href="<?= site_url('peminjaman/kembali/'.$d->id); ?>"
        class="btn btn-success btn-sm">
            Kembalikan
        </a>

        <a href="<?= site_url('whatsapp/kirim_notifikasi/'.$d->id); ?>"
        class="btn btn-success btn-sm">
            Kirim WA
        </a>

    <?php endif; ?>

</td>
    </tr>
    
<?php endforeach; ?>
</tbody>

</table>

        </div>
    </div>
</div>
</div>