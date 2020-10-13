<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:1114px; height:375px;">
     <h2 align="center">
          <font color="orange" size="4" face="arial"><b>Data Barang</b></font>
     </h2><br>
     <input type="button" value="Export To PDF" title="Save as PDF Format" onclick="window.open('home_perlengkapan.php?page=export-pdf','_blank');"> <input type="button" value="Tambah" title="Tambah data barang" onclick="window.open('home_perlengkapan.php?page=form-input-master-barang','_self');"><br><br>
     <table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr bgcolor="#FF6600">
               <th width="5">No</td>&nbsp;
               <th width="80" height="42">Image</td>&nbsp;
               <th width="80">Kode Barang</td>&nbsp;
               <th width="170">Nama Barang</td>&nbsp;
               <th width="170">No Inventaris</td>&nbsp;
               <th width="70">Jenis Barang</td>&nbsp;
               <th width="60">Tanggal Masuk</td>&nbsp;
               <th width="60">Tanggal Keluar</td>&nbsp;
               <th width="60">Tahun Perolehan</td>&nbsp;
               <th width="60">Jumlah Masuk</td>&nbsp;
               <th width="60">Jumlah Keluar</td>&nbsp;
               <th width="60">Satuan</td>&nbsp;
               <th width="60">Kategori</td>&nbsp;
               <th width="80">Action</td>&nbsp;
          </tr>
          <?php
          include "../koneksi.php";
          $Cari = "SELECT * FROM barang b LEFT JOIN satuan s ON s.id_satuan=b.id_satuan LEFT JOIN kategori k ON k.id_kategori=b.id_kategori ORDER BY kode_brg";
          $Tampil = mysqli_query($Open, $Cari);
          $nomer = 0;
          while ($hasil = mysqli_fetch_array($Tampil)) {
               $kode_brg     = stripslashes($hasil['kode_brg']);
               $image          = stripslashes($hasil['image']);
               $nama_brg     = stripslashes($hasil['nama_brg']);
               $no_inventaris     = stripslashes($hasil['no_inventaris']);
               $jenis_brg     = stripslashes($hasil['jenis_brg']);
               $tgl_masuk     = stripslashes($hasil['tgl_masuk']);
               $tgl_keluar     = stripslashes($hasil['tgl_keluar']);
               $jumlah_masuk     = stripslashes($hasil['jumlah_masuk']);
               $jumlah_keluar     = stripslashes($hasil['jumlah_keluar']);
               $tahun_perolehan     = stripslashes($hasil['tahun_perolehan']);
               $nama_satuan     = stripslashes($hasil['nama_satuan']);
               $nama_kategori     = stripslashes($hasil['nama_kategori']); {
                    $nomer++;
          ?>
                    <tr align="center" bgcolor="#DFE6EF">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                    </tr>
                    <tr align="center">
                         <td height="32"><?= $nomer ?><div align="center"></div>
                         </td>
                         <td><?php
                              if (empty($image))
                                   echo "<img src='../assets/img/no-img.png' width='100' height='110'><br>No Image";
                              else
                                   echo "<img class='shadow' src='../assets/img/$image' width='100' height='110' title='$image'>";
                              ?>&nbsp;</td>
                         <td><?= $kode_brg ?><div align="center"></div>
                         </td>
                         <td><?= $nama_brg ?><div align="center"></div>
                         </td>
                         <td><?= $no_inventaris ?><div align="center"></div>
                         </td>
                         <td><?= $jenis_brg ?><div align="center"></div>
                         </td>
                         <td><?= $tgl_masuk ?><div align="center"></div>
                         </td>
                         <td><?= $tgl_keluar ?><div align="center"></div>
                         </td>
                         <td><?= $tahun_perolehan ?><div align="center"></div>
                         </td>
                         <td><?= $jumlah_masuk ?><div align="center"></div>
                         </td>
                         <td><?= $jumlah_keluar ?><div align="center"></div>
                         </td>
                         <td><?= $nama_satuan ?><div align="center"></div>
                         </td>
                         <td><?= $nama_kategori ?><div align="center"></div>
                         </td>
                         <td bgcolor="#EEF2F7">
                              <div align="center"><a href="home_perlengkapan.php?page=edit-data-barang&kode_brg=<?= $kode_brg ?>">Edit</a>
                                   | <a href="home_perlengkapan.php?page=delete-data-barang&kode_brg=<?= $kode_brg ?>">Delete</a></div>
                         </td>
                    </tr>
                    <tr align="center" bgcolor="#DFE6EF">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                    </tr>
          <?php
               }
          }
          //Tutup koneksi engine MySQL
          mysqli_close($Open);
          ?>
     </table>
</div>