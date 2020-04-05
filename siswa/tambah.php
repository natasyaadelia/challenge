<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card" style="background-color: #fde2e2;">
                <div class="card-header">
                        <h2>Tambah Data Nilai </h2>
                </div>               
                <div class="card-body">
                <form method="post" action="proses_tambah.php">
                        <div class="form-group">
                            <label for="judul">NIS</label>
                            <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan NIS">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Nama Siswa</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Siswa">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                                <select name="jurusan" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                                <option value="MM">MM</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                                <select name="kelas" class="form-control">
                                    <option value="">Pilih Kelas</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="cover">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Siswa">
                        </div>
                        <div class="form-group">
                            <label for="nilai_web">Nilai Web</label>
                            <input type="number" class="form-control" name="nilai_web" id="nilai_web" placeholder="Masukkan Nilai Web">
                        </div>
                        <div class="form-group">
                            <label for="nilai_pbo">Nilai PBO</label>
                            <input type="number" class="form-control" name="nilai_pbo" id="nilai_pbo" placeholder="Masukkan Nilai PBO">
                        </div>
                        <div class="form-group">
                            <label for="nilai_basdat">Nilai Basdat</label>
                            <input type="number" class="form-control" name="nilai_basdat" id="nilai_basdat" placeholder="Masukkan Nilai Basdat">
                        </div>
                        <div class="form-group">
                            <label for="nilai_desain">Nilai Desain</label>
                            <input type="number" class="form-control" name="nilai_desain" id="nilai_desain" placeholder="Masukkan Nilai Desain">
                        </div>
                        <div class="form-group">
                            <label for="nilai_progdas">Nilai Progdas</label>
                            <input type="number" class="form-control" name="nilai_progdas" id="nilai_progdas" placeholder="Masukkan Nilai Progdas">
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
