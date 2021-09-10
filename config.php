<?php
$conn = mysqli_connect("localhost","root","","kontak") or die ("Koneksi gagal");

    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $pesan = $_POST['pesan'];
    $query= "INSERT INTO labeltabel VALUES('null', '$nama','$jkel','$email','$alamat','$kota','$pesan' )";

    mysqli_query($conn, $query);
    header("location: kontak.php");
