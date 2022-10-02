<div class="container">
 <div class="row-mt-3">
 <div class="col-md-6">
 <?php if (validation_errors()) : ?>
 <div class="alert alert-danger" role="alert">
 <?= validation_errors(); ?>
 </div>
 <?php endif ?>
 <form action="" method="post">
<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
 <h1>Edit Mahasiswa</h1>
 <div class="form-group">
 <label for="nama">Nama</label>
 <input name="nama" type="text" class="form-control" id="nama" 
placeholder="Nama Lengkap" value="<?= $mahasiswa['nama']; ?>">
 </div>
 <div class="form-group">
 <label for="nim">NIM</label>
 <input name="nim" type="text" class="form-control" id="nim" 
placeholder="NIM" value="<?= $mahasiswa['nim']; ?>">
 </div>
 <div class="form-group">
 <label for="email">E-Mail</label>
 <input name="email" type="text" class="form-control" id="email" 
placeholder="E-Mail" value="<?= $mahasiswa['email']; ?>">
 </div>
 <div class="form-group">
 <label for="jurusan">Jurusan</label>
 <select class="form-control" name="jurusan" id="jurusan">
 <option value="Teknik Informatika">Teknik Informatika</option>
 <option value="Teknik Mesin">Teknik Mesin</option>
 <option value="Teknik Industri">Teknik Industri</option>
 </select>
 </div>
 <button type="edit" name="edit" class="btn btn-primary">Edit</button>
 </form>
 </div>
 </div>
</div>