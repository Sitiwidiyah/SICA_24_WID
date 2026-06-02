<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <div class="container-fluid mt-4">

      <h3>Edit Anggota</h3>
      <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

      <form action="<?= base_url('anggota/update/'.$anggota->id) ?>" method="post">
        <div class="form-group">
          <label>Nomor Anggota</label>
          <input type="text" name="nomor" class="form-control"
                 value="<?= set_value('nomor', $anggota->nomor_anggota) ?>">
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control"
                 value="<?= set_value('nama', $anggota->nama) ?>">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control"><?= set_value('alamat', $anggota->alamat) ?></textarea>
        </div>
        <div class="form-group">
          <label>Telepon</label>
          <input type="text" name="telepon" class="form-control"
                 value="<?= set_value('telepon', $anggota->telepon) ?>">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control"
                 value="<?= set_value('email', $anggota->email) ?>">
        </div>
        <div class="form-group">
          <label>Tanggal </label>
          <input type="date" name="tanggal" class="form-control"
                 value="<?= set_value('tanggal', $anggota->tanggal) ?>">
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="status" class="form-control">
            <option value="aktif"    <?= $anggota->status == 'aktif'    ? 'selected' : '' ?>>Aktif</option>
            <option value="nonaktif" <?= $anggota->status == 'nonaktif' ? 'selected' : '' ?>>Nonaktif</option>
          </select>
        </div>
        <a href="<?= base_url('anggota') ?>" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>

    </div>
  </div>
</div>

<?php $this->load->view('templates/footer'); ?>