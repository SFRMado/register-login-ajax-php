<?php

include('koneksi.php');

$nama_lengkap = $_POST['nama_lengkap'];
$username     = $_POST['username'];
$password     = MD5($_POST['passwords']);

//query insert data ke dalam database
$query = "INSERT INTO tbl_user (nama_lengkap, username, passwords) VALUES ('$nama_lengkap', '$username', '$password')";        

if($connection->query($query)) {
    
    echo "success";

} else {
    
    echo "error";

}