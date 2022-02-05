<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO data(nama, kelas, alamat) VALUES('$nama', '$kelas', '$alamat')";
    $add = $conn->query($sql);

    if($add) {
        $conn->close();
> Pertemuan5
        header("location:index.php");
        exit();                     
    }else{
        $conn->close();
        header("Error : ".$conn->error);
=======
        header("location:index");
        exit();                     
    }else{
        $conn->close();
        header("Error : ".$conn->close());
> main
        exit();
    }
?>