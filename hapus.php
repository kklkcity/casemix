<?php
// INCLUDE KONEKSI KE DATABASE
include("conf.php");

// AMBIL DATA ID DI URL
$id = $_GET['id_px_ranap'];

// DELETE DATA DARI TABLE
$result = mysqli_query($mysqli, "UPDATE data_ranap SET status='0' WHERE id_px_ranap=$id");

// REDIRECT KE index.php
header("Location:input.php");