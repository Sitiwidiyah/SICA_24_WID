<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<?php $this->load->view('templates/topbar'); ?>

<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <div class="container-fluid mt-4">

      <h3>Data Anggota</h3>
      <a href="<?= base_url('anggota/tambah') ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Anggota
      </a>

      <table id="tabelAnggota" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nomor Anggota</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>tanggal</th>    
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach($anggota as $a){ ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $a->nomor_anggota ?></td>
            <td><?= $a->nama ?></td>
            <td><?= $a->telepon ?></td>
            <td><?= $a->email ?></td>
            <td><?= $a->tanggal ?></td>
            <td><?= $a->status ?? 'aktif' ?></td>
            <td>
              <a href="<?= base_url('anggota/edit/'.$a->id) ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="<?= base_url('anggota/hapus/'.$a->id) ?>" class="btn btn-danger btn-sm"
                 onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#tabelAnggota').DataTable();
  });
</script>

<?php $this->load->view('templates/footer'); ?>