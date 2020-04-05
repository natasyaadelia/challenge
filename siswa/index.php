<?php
include '../aset/header.php';
include 'koneksi.php';
    $sql = "SELECT * FROM siswa";

    $res = mysqli_query($koneksi, $sql);

    $siswa = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $siswa[] = $data;
}
?>


<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row at-4">
    <div class="col-md">
            </div>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title"><i class="fas fa-book"></i>Data Siswa</h2>
  </div>
  <div class="card-body" style="background-color: #fde2e2;">
  <table class="table table-striped">
  <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>                  
                            <th scope="col">Kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nilai Web</th>
                            <th scope="col">Nilai PBO</th>
                            <th scope="col">Nilai Basdat</th>
                            <th scope="col">Nilai Desain</th>
                            <th scope="col">Nilai Progdas</th>
                            <th scope="col">Nilai Rata - rata</th>
                            <th scope="col">Predikat Nilai</th>
                            <th scope="col">Keterangan</th>             
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($siswa as $p ) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $p['nis'] ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['jurusan'] ?></td>
                            <td><?= $p['kelas'] ?></td>
                            <td><?= $p['alamat'] ?></td>
                            <td><?= $p['nilai_web'] ?></td>
                            <td><?= $p['nilai_pbo'] ?></td>
                            <td><?= $p['nilai_basdat'] ?></td>
                            <td><?= $p['nilai_desain'] ?></td>
                            <td><?= $p['nilai_progdas'] ?></td>
                            <td><?= $p['nilai_rata'] ?></td>
                            <td><?= $p['predikat'] ?></td>
                            <td><?= $p['keterangan'] ?></td>                           
                        </tr>    
    <?php
        $no++;
    }
    ?>
</table>
    
    </div>
</div>

<?php
include '../aset/footer.php';
?>