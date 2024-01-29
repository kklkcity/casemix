<?php 
// koneksi mysql ke php
$con = mysqli_connect("localhost","root","","casemix");

$no_reg = $_GET['no_reg'];

$query = mysqli_query($con,"select no_reg,ruang,nama,penjamin,dx_masuk from px_ranap where no_reg='$no_reg'");

$user = mysqli_fetch_array($query);
$data = array(
            'no_reg'        =>  @$user['no_reg'],
            'ruang'         =>  @$user['ruang'],        
            'nama'          =>  @$user['nama'],
            'penjamin'      =>  @$user['penjamin'],
            'dx_masuk'      =>  @$user['dx_masuk'],);
           
//tampil data
echo json_encode($data);
?>

<!-- //   $no_reg = $_REQUEST['no_reg'];
//   $con = mysqli_connect("127.0.0.1","root","","casemix");
// if ($no_reg!=="") { 
//     $query = mysqli_query($con, "SELECT ruang, nama, penjamin, dx_masuk FROM px_ranap WHERE no_reg='$no_reg'"); 
//     $row = mysqli_fetch_array($query); 
  
//     $ruang = $row["ruang"];
//     $nama = $row["nama"]; 
//     $penjamin = $row["penjamin"];
//     $dx_masuk = $row["dx_masuk"];
    
// } 
  
// // Store it in a array 
// $result = array("$ruang", "$nama", $penjamin, $dx_masuk); 
//     $myJSON = json_encode($result); 
//     echo $myJSON; 
  
// // Send in JSON encoded form 
 -->