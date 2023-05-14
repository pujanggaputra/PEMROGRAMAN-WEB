<?php
include('koneksi.php');

$a = $_POST['tanggal'];
$b = $_POST['jenis'];
$c = $_POST['tglmasuk'];
$d = $_POST['nis'];
$e = $_POST['nomorpesertaujian'];
$f = $_POST['paud'];
$g = $_POST['tk'];
$hobi = $_POST['hobi'];
$cita = $_POST['cita'];

$nama = $_POST['nama'];
$jkel = $_POST['jkel'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];

$tmp_l = $_POST['tmptlahir'];
$tgl_l = $_POST['tgllahir'];
$agama = $_POST['agama'];

$khusus = $_POST['khusus'];
$alamatjln = $_POST['alamatjalan'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];

$dusun = $_POST['namadusun'];
$lurah = $_POST['namalurah'];
$kec = $_POST['namakec'];
$kdpos = $_POST['kdpos'];
$tmp_tinggal = $_POST['tempattinggal'];
$trans = $_POST['transport'];
$hp = $_POST['nomorhp'];
$tlp = $_POST['nomortlp'];
$email = $_POST['email'];
$kps = $_POST['penerima_kps'];
$kwn = $_POST['kwn'];
$nm_negara = $_POST['nama_negara'];

$simpan = mysqli_query($koneksi, "INSERT INTO `data`(`tgl`, `jenis_daftar`, `tgl_sekolah`, `nis`, 
    no_peserta, paud, tk, hobi, cita, nama, jkel, nisn, nik, tmplahir, tgllahir, 
    agama, khusus, alamat_jalan, rt, rw, lurah, dusun, kec, kdpos, tmp_tinggal, trans, hp, tlp, email, kps, kwn, nm_negara) VALUES ('"
    . $a . "','" . $b . "','" . $c . "','"
    . $d . "','" . $e . "','" . $f . "','"
    . $g . "','" . $hobi . "','" . $cita . "','" . $nama . "','" . $jkel . "','" . $nisn . "','" . $nik . "','"
    . $tmp_l . "','" . $tgl_l . "','" . $agama . "','"
    . $khusus . "','" . $alamatjln . "','" . $rt . "','" . $rw . "','" . $lurah . "','" . $dusun . "','"
    . $kec . "','" . $kdpos . "','" . $tmp_tinggal . "','" . $trans . "','" . $hp . "','" . $tlp . "','" . $email . "','" . $kps . "','" . $kwn . "','" . $nm_negara . "');");

if ($simpan > 0) {
    ?>
<html>

<head></head>

<body>
    <a href="cetak.php">Simpan berhasil, Ulangi input ? </a>
</body>

</html>
<?php

} else {
    ?>
<html>

<head></head>

<body>
    <a href="cetak.php">Simpan gagal, Ulangi input..!!</a>
</body>

</html>

<?php
}