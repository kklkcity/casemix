<?php

//membuat koneksi ke database
$con = mysqli_connect("localhost","root","","casemix");

$no_rm = $_GET['no_rm'];

$query = mysqli_query($con,"select no_rm, ruang, nama, penjamin, dx_masuk from px_ranap where no_rm='$no_rm'");

$user = mysqli_fetch_array($query);
$data = array(
            'no_rm'        =>  @$user['no_rm'],
            'ruang'         =>  @$user['ruang'],        
            'nama'          =>  @$user['nama'],
            'penjamin'      =>  @$user['penjamin'],
            'dx_masuk'      =>  @$user['dx_masuk'],);
           
//tampil data
echo json_encode($data);
?>