<?php

session_start();
include 'koneksi.php';
$username = $_SESSION['username'];
$output = array();
$var = array();

$sql = "SELECT * FROM tbl_customers WHERE username != '$username'";
$query = mysqli_query($conn, $sql);

while ( $data = mysqli_fetch_array($query) ){
    $var['username'] = $username;
    $var['fullname'] = $data['fullname'];
    $var['temanObrolan'] = $data['username'];
    $var['gambar'] = $data['gambar'];

    array_push($output, $var);
}

echo json_encode($output);

?>