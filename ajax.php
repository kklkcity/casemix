<?php

//membuat koneksi ke database
$con = mysqli_connect("localhost","root","","casemix");

$no_rm = $_GET['no_rm'];

$query = mysqli_query($con,"SELECT px_ranap.id, px_ranap.no_rm,px_ranap.nama,px_ranap.penjamin,px_ranap.dx_masuk,px_ranap.kelas,px_ranap.ruang,data_ranap.dx_1,data_ranap.dx_2,data_ranap.pendukung_1,data_ranap.pendukung_2,data_ranap.tindakan_1,data_ranap.tindakan_2,data_ranap.tarif_ina,data_ranap.tarif_kls_1,data_ranap.tarif_kls_2,data_ranap.id_px_ranap FROM px_ranap LEFT JOIN data_ranap ON px_ranap.id = data_ranap.id_px_ranap WHERE px_ranap.no_rm ='$no_rm'");

$user = mysqli_fetch_array($query);
$data = array(
            'id'        =>  @$user['id'],
            'no_rm'        =>  @$user['no_rm'],
            'ruang'         =>  @$user['ruang'],        
            'nama'          =>  @$user['nama'],
            'penjamin'      =>  @$user['penjamin'],
            'dx_masuk'      =>  @$user['dx_masuk'],
            'dx_1'          =>  @$user['dx_1'],
            'dx_2'          =>  @$user['dx_2'],
            'tindakan_1'          =>  @$user['tindakan_1'],
            'tindakan_2'          =>  @$user['tindakan_2'],
            'pendukung_1'          =>  @$user['pendukung_1'],
            'pendukung_2'          =>  @$user['pendukung_2'],
            'tarif_ina'          =>  @$user['tarif_ina'],
            'tarif_kls_1'          =>  @$user['tarif_kls_1'],
            'tarif_kls_2'          =>  @$user['tarif_kls_2']);
//tampil data
echo json_encode($data);
?>