<div class="container">
<?php if ($this->session->flashdata('flash')) : ?>
<div class="row-mt3">
<div class="col-md-6">
<div class="alert alert-success" role="alert">
Data Mahasiswa Berhasil <?= $this->session->flashdata('flash'); ?>
</div>
</div>
</div>
<?php endif; ?>
<div class="row">
<div class="col-md-6">
<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
<!-- mahasiswa/tambah adalah memanggil method/fungsi yang ada di controller Mahasiswa.php--> 
</div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari data Mahasiswa..." 
                name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>
    <div class="row">
        <div class="col-md-6">
            <h1>Daftar Mahasiswa</h1>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <!-- memanggil $data['mahasiswa'] pada controller Mahasiswa.php-->
                    <li class="list-group-item"><?= $mhs['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger float-right">hapus </a>
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-primary float-right">detail </a>
                    <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>" class="btn btn-success float-right">edit </a>
                </li>
                    <!-- memanggil data pada kolom nama-->
                <?php endforeach ?>
                <!-- akhir panggilan tabel-->
            </ul>
        </div>
    </div>

    <h1>Login berhasil !</h1> 
    <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2> 
    <a href="<?php echo base_url('auth/logout'); ?>">Logout</a> 

</div>