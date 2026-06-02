<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Anggota</h1>
        <a href="<?= base_url('anggota') ?>" class="btn btn-secondary btn-sm">
          <i class="fas fa-arrow-left fa-sm"></i> Kembali
        </a>
      </div>

      <!-- Card Form -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Form Input Anggota</h6>
        </div>
        <div class="card-body">

          <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

          <form action="<?= base_url('anggota/simpan') ?>" method="post">

            <div class="form-group row">
              <label class="col-sm-3 col-form-label font-weight-bold">Nomor Anggota</label>
              <div class="col-sm-9">
                <input type="text" name="nomor" class="form-control"
                       placeholder="Masukkan nomor anggota"
                       value="<?= set_value('nomor') ?>">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label font-weight-bold">Nama</label>
              <div class="col-sm-9">
                <input type="text" name="nama" class="form-control"
                       placeholder="Masukkan nama lengkap"
                       value="<?= set_value('nama') ?>">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label font-weight-bold">Alamat</label>
              <div class="col-sm-9">
                <textarea name="alamat" class="form-control" rows="3"
                          placeholder="Masukkan alamat lengkap"><?= set_value('alamat') ?></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label font-weight-bold">Telepon</label>
              <div class="col-sm-9">
                <input type="text" name="telepon" class="form-control"
                       placeholder="Masukkan nomor telepon"
                       value="<?= set_value('telepon') ?>">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label font-weight-bold">Email</label>
              <div class="col-sm-9">
                <input type="text" name="email" class="form-control"
                       placeholder="Masukkan email"
                       value="<?= set_value('email') ?>">
              </div>
            </div>
            

            <div class="form-group row">
  <label class="col-sm-3 col-form-label font-weight-bold">Tanggal</label>
  <div class="col-sm-9">
    <input type="date" name="tanggal" class="form-control">
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 col-form-label font-weight-bold">Status</label>
  <div class="col-sm-9">
    <select name="status" class="form-control">
      <option value="">-- Pilih Status --</option>
      <option value="aktif">Aktif</option>
      <option value="nonaktif">Nonaktif</option>
    </select>
  </div>
</div>
         
            </div>

            <hr>
            <div class="form-group row">
              <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-save"></i> Simpan
                </button>
                <a href="<?= base_url('anggota') ?>" class="btn btn-secondary">
                  <i class="fas fa-times"></i> Batal
                </a>
              </div>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<?php $this->load->view('templates/footer'); ?>