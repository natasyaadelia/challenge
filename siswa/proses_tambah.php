<?php
include 'koneksi.php';

if(isset($_POST['simpan']))
{
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    If($_POST ['jurusan'] == 'RPL'){
        $jurusan = "rekayasa perangkat lunak";
        }else if($_POST ['jurusan'] == 'TKJ'){
            $jurusan = "teknik komputer jaringan";
        }else if($_POST ['jurusan'] == 'MM'){
            $jurusan = "MultiMedia";
        }
    If($_POST ['kelas'] == 'X'){
            $kelas = "x";
            }else if($_POST ['kelas'] == 'XI'){
                $kelas = "xi";
            }else if($_POST ['kelas'] == 'XII'){
                $kelas = "xii";
            }
    $alamat = $_POST['alamat'];
    $web = $_POST['nilai_web'];
    $pbo = $_POST['nilai_pbo'];
    $basdat = $_POST['nilai_basdat'];
    $desain = $_POST['nilai_desain'];
    $progdas = $_POST['nilai_progdas'];
    $jumlah = $web + $pbo + $basdat + $desain + $progdas;
    $rata = $jumlah/5;

    if($rata >= 90) {
        $predikat = 'A';
        $keterangan = 'Excellent';
    } else if ($rata >= 80) {
        $predikat = 'B';
        $keterangan = 'Baik';
    } else if ($rata >=70) {
        $predikat = 'C';
        $keterangan = 'Cukup';
    } else if ($rata >= 60){
        $predikat = 'D';
        $keterangan = 'Kurang';
    } else if ($rata <= 50){
        $predikat = 'E';
        $keterangan = 'Rendah';
    }

    $sql = "INSERT INTO siswa (nis, nama, jurusan, kelas, alamat, nilai_web, nilai_pbo, 
    nilai_basdat, nilai_desain, nilai_progdas, nilai_rata, predikat, keterangan)
            VALUES ('$nis', '$nama', '$jurusan', '$kelas', '$alamat', '$web', '$pbo', '$basdat', '$desain', '$progdas', 
            '$rata', '$predikat', '$keterangan')";
    
        $res = mysqli_query($koneksi, $sql);
        $count = mysqli_affected_rows($koneksi);

    if($count == 1)
    {
        header("Location: index.php");
    }
    else 
    {
    header("Location: tambah.php");
    }
}
?>