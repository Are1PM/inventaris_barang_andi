<br />
<?php
include '../koneksi.php';
// Cek Kode
if (isset($_GET['id_kategori'])) {
	$id_kategori = $_GET['id_kategori'];
	$query   = "SELECT * FROM kategori WHERE id_kategori='$id_kategori'";
	$hasil   = mysqli_query($Open,$query);
	$data    = mysqli_fetch_array($hasil);
}
	else {
		die ("Error. Tidak ada Kode yang dipilih Silakan cek kembali! ");	
	}
	//proses delete data
	if (!empty($id_kategori) && $id_kategori != "") {
		$hapus = "DELETE FROM kategori WHERE id_kategori='$id_kategori'";
		$sql = mysqli_query($Open,$hapus);
		if ($sql) {		
			?>
				<script language="JavaScript">
				alert('Data Kategori Berhasil dihapus');
				document.location='home_perlengkapan.php?page=lihat-data-kategori';
				</script>
			<?php		
		} else {
			echo "<h2><font color=red><center>Data kategori gagal dihapus</center></font></h2>";	
		}
	}
//Tutup koneksi engine mysqli
	mysqli_close($Open);
?>