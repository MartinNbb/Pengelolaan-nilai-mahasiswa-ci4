<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<title>Login</title>

<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <form method="post" action="<?= route_to('guest.handleLogin') ?>" class="card-body p-5 text-center" enctype="multipart/form-data">
            <h3 class="mb-5">LOGIN</h3>

              <div class="">
                <div class="form-outline mb-4">
                  <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="username" name="username">
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="form2Example17" class="form-control form-control-lg" placeholder="password" name="password">
                </div>
              </div>

            <?php if (session()->has('error')) : ?>
              <div class="alert alert-danger">
                  <?= session('error') ?>
              </div>
            <?php endif ?>
            <button class="mb-4 btn btn-primary btn-lg btn-block" type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
