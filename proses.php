<?php
include "koneksi.php";

$nim = $_POST['nim_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_mahasiswa = $_POST['status_mahasiswa'];

$simpan = "INSERT INTO tb_mhs(nim_mahasiswa,nama_mahasiswa,semester,jurusan,alamat,
no_hp,email,jenis_kelamin,status_mahasiswa) 
values('$nim','$nama_mahasiswa','$semester','$jurusan','$alamat','$no_hp','$email','$jenis_kelamin',
'$status_mahasiswa')";

// cek koneksiS
if (mysqli_query($koneksi, $simpan)) {
    echo "<script language='javascript'>
    alert('data berhasil di simpan');
    document.location ='Data_Mahasiswa.php'
    </script>";
} else {
    echo "lapor !! data tidak berhasil disimpan" . mysqli_error($koneksi);
}
?>