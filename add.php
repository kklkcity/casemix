<html>

<head>
	<title>Tambah Data</title>
</head>

<body>
	<?php
	// INCLUDE KONEKSI KE DATABASE
	include_once("conf.php");

	if (isset($_POST['Submit'])) {
		$id = mysqli_real_escape_string($mysqli, $_POST['id']);
		$dx2 = mysqli_real_escape_string($mysqli, $_POST['dx_2']);
		$dx3 = mysqli_real_escape_string($mysqli, $_POST['dx3']);
		$pendukung_1 = mysqli_real_escape_string($mysqli, $_POST['pendukung_1']);
		$pendukung_2 = mysqli_real_escape_string($mysqli, $_POST['pendukung_2']);
		$tindakan_1 = mysqli_real_escape_string($mysqli, $_POST['tindakan_1']);
		$tindakan_2 = mysqli_real_escape_string($mysqli, $_POST['tindakan_2']);
		$tarif_ina = mysqli_real_escape_string($mysqli, $_POST['tarif_ina']);
		$tarif_kls_1 = mysqli_real_escape_string($mysqli, $_POST['tarif_kls_1']);
		$tarif_kls_2 = mysqli_real_escape_string($mysqli, $_POST['tarif_kls_2']);
		
		// CEK DATA TIDAK BOLEH KOSONG
		if (empty($dx2)) {

			if (empty($dx2)) {
				echo "<font color='red'>Minimal ada 1 data.</font><br/>";
			}

			// KEMBALI KE HALAMAN SEBELUMNYA
			echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
		} else {
			
			// MEMASUKAN DATA DATA + NAMA GAMBAR KE DALAM DATABASE
			$result = mysqli_query($mysqli, "INSERT INTO data_ranap (id_px_ranap,dx_1,dx_2,pendukung_1,pendukung_2,tindakan_1,tindakan_2,tarif_ina,tarif_kls_1,tarif_kls_2) VALUES ('$id','$dx2','$dx3','$pendukung_1','$pendukung_2','$tindakan_1','$tindakan_2','$tarif_ina','$tarif_kls_1','$tarif_kls_2')");
			echo "aaaa.$result";
			printf($result);
			// MENAMPILKAN PESAN BERHASIL
			echo "<font color='green'>Data Berhasil ditambahkan.";
			echo "<br/><a href='input.php'>Kembali</a>";
		}
	}else{
		// AMBIL DATA ID DI URL
		$id = $_GET['id_px_ranap'];

		// DELETE DATA DARI TABLE
		$result = mysqli_query($mysqli, "UPDATE data_ranap SET status='0' WHERE id_px_ranap=$id");

		// REDIRECT KE index.php
		header("Location:input.php");
	}
	?>
</body>

</html>
