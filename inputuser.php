<?php 
//koneksi ke database
$db = mysqli_connect("localhost","root","","blog_caleg");

if (isset($_POST["submit"])){
    //ambil data yang di input user
    $nama = $_POST["nama"];
    $notelp = $_POST["notelp"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $noktp = $_POST["noktp"];
    $komentar = $_POST["komentar"];

    //query dan masukan data ke database
    $query = "INSERT INTO input_user VALUES
                ('','$nama','$notelp','$email','$alamat','$noktp','$komentar')";
    mysqli_query($db, $query);

}
















?>