<div class="container">
    <div class="row-mt-3">
        <div class="col-md-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif ?>
            
            <form action="" method="post">
                <h1>Tambah Mahasiswa</h1>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama"
                        placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input name="nim" type="text" class="form-control" id="nim"
                        placeholder="NIM">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input name="email" type="text" class="form-control" id="email"
                        placeholder="E-Mail">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Pendidikan sejarah">Pendidikan sejarah</option>
                        <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                        </select>
                    </div>

                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>

            </form>
        </div>
    </div>
</div>