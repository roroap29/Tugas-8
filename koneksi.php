<?php
//membuat koneksi database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dbform';
$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    echo 'Error : '.mysqli_connnect_error($conn);
}
?>