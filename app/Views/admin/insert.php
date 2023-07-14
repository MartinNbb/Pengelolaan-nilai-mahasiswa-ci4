<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<title>Input Nilai</title>

<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <form method="post" action="<?= route_to('admin.handleInsert') ?>" class="card-body p-5 text-center" enctype="multipart/form-data">
            <h3 class="mb-5">Input Nilai Mahasiswa</h3>

              <div class="">
                <div class="form-outline mb-4">
                  <input type="number" id="form2Example17" class="form-control form-control-lg" placeholder="npm" name="npm">
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="nama" name="nama">
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="mata kuliah" name="mata_kuliah">
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="dosen" name="dosen">
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="nilai" name="nilai">
                </div>
                <select class="form-select mb-4" aria-label="Default select example" name="type">
                  <option selected>Tipe Nilai</option>
                  <option value="uts">UTS</option>
                  <option value="uas">UAS</option>
                  <option value="nilai_akhir">Nilai Akhir</option>
                </select>
              </div>

            <?php if (session()->has('error')) : ?>
              <div class="alert alert-danger">
                  <?= session('error') ?>
              </div>
            <?php endif ?>
            <button class="mb-4 btn btn-primary btn-lg btn-block" type="submit">Tambahkan Nilai</button>
            <p class="" style="color: #393f81;">Kembali ke halaman nilai? <a href="<?= route_to('admin.dashboard') ?>" style="color: #508bfc;">klik di sini</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
