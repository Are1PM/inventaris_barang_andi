<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:1114px; height:375px;">
     <?php
include '../koneksi.php';
if (isset($_GET['id_kategori'])) {
	$id_kategori = $_GET['id_kategori'];
} else {
	die ("Error. No Kode Selected! ");	
}

//proses edit data kategori
if (isset($_POST['Edit'])) {
	$id_kategori	= $_POST['hid_kategori'];
	$nama_kategori	= $_POST['nama_kategori'];
     $jumlah = $_POST['jumlah'];
	
	//update data
	$query = "UPDATE kategori SET nama_kategori='$nama_kategori', jumlah='$jumlah' WHERE id_kategori='$id_kategori'";
	$sql = mysqli_query ($Open,$query);
	//setelah berhasil update
	if ($sql) {
		echo "<h3><font color=green><center><blink>Data kategori Berhasil diedit</blink></center></font></h3>
			<input type='button' value='Back To View' onclick=location.href='home_perlengkapan.php?page=lihat-data-kategori' title='kembali ke form lihat data kategori'><br><br>";	
	} else {
		echo "<h3><font color=red><center>Data kategori gagal diedit</center></font></h3>";	
	}
}

//Tampilkan data dari tabel kategori
$query = "SELECT * FROM kategori WHERE id_kategori='$id_kategori'";
$sql = mysqli_query($Open,$query);
$hasil = mysqli_fetch_array ($sql);
$id_kategori	= $hasil['id_kategori'];
$nama_kategori	= $hasil['nama_kategori'];
$jumlah = $hasil['Jumlah'];
?>
     <form action="#" method="POST" name="edit-data-kategori" enctype="multipart/form-data">
          <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="550">&nbsp;</td>
               </tr>
               <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="500">
                         <font color="orange" size="4" face="arial"><b>Edit Data Kategori</b></font>
                    </td>
               </tr>
               <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="500">&nbsp;</td>
               </tr>
               <tr bgcolor="#DFE6EF" height="20">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="550" align="center"><b>Data Kategori</b></td>
               </tr>
               <tr>
                    <td width="18">&nbsp;</td>
                    <td width="142" height="36"></td>
                    <td width="550">
                              <input type="hidden" name="hid_kategori" value="<?=$id_kategori?>"></td>
               </tr>
               <tr>
                    <td>&nbsp;</td>
                    <td height="36">Nama Kategori</td>
                    <td><input type="text" name="nama_kategori" size="30" maxlength="30" value="<?=$nama_kategori?>"></td>
               </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td height="36">Jumlah</td>
                    <td><input type="number" name="jumlah" size="30" maxlength="30" value="<?=$jumlah?>"></td>
               </tr>
               <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="Edit" value="Edit Data">&nbsp;&nbsp;
                         <input type="button" value="Cancel"
                              onclick=location.href="home_perlengkapan.php?page=lihat-data-kategori"
                              title="kembali ke lihat data kategori"></td>
               </tr>
               <tr>
                    <td>&nbsp;</td>
                    <td height="32">&nbsp;</td>
                    <td>&nbsp;</td>
               </tr>
          </table>
     </form>
     <?php
//Tutup koneksi engine mysqli
	mysqli_close($Open);
?>
</div>