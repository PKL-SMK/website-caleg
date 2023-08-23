<?php 
//koneksi ke database
include 'connection.php';

if (isset($_POST["submit"])){
    //ambil data yang di input user
    $name = $_POST["name"];
    $notelp = $_POST["notelp"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $noktp = $_POST["noktp"];
    $komentar = $_POST["komentar"];

    //query dan masukan data ke database
    $query = "INSERT INTO input_user VALUES
            ('','$name','$notelp','$email','$alamat','$noktp','$komentar')";
    mysqli_query($db, $query);
    
    echo "<script> 
                alert('Terima Kasih Telah Mendukung Saya')
         </script>";

}

?>