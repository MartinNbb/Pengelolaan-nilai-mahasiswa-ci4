<?= $this->extend('template/adminLayout') ?>

<?= $this->section('inner-content') ?>
<title>Dashboard UTS</title>


<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <span class="navbar-brand mb-0 h1">Selamat Datang Di Pengelolaan Nilai Mahasiswa | Nilai UTS
            </span>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
            </a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?= route_to('admin.insert') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa-solid fa-shirt"></i> Input Nilai</a>
    </div>

    <div class="container card p-5" >
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($uts as $p) { ?>
                    <tr>
                        <td><?= $p->npm ?></td>
                        <td><?= $p->nama ?></td>
                        <td><?= $p->matakuliah ?></td>
                        <td><?= $p->dosen ?></td>
                        <td><?= $p->nilai ?></td>
                        <td class="row gap-2">
                            <a class="col-auto btn btn-danger"  href="<?= route_to('admin.handleDelete', $p->nilai_id) ?>">batal</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    let table = new DataTable('#myTable');
</script>   

<?= $this->endSection() ?>
