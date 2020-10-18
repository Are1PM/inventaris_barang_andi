<?php
$idRoute = explode("&", $GLOBALS['currentRoute'])[0];

$d = cariBarang($_GET['id']);
if ($d) {
?>
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Detail <?= $idRoute ?></h2>
                <div class="panel_toolbox">
                    <a href="?page=lihat-<?= $idRoute ?>">
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </button>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row" width="30%">Kode Barang</th>
                            <td><?= $d['kode_brg'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Barang</th>
                            <td><?= $d['nama_brg'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">No Inventaris</th>
                            <td><?= $d['no_inventaris'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Barang</th>
                            <td><?= $d['jenis_brg'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Masuk</th>
                            <td><?= date("j M Y", strtotime($d['tgl_masuk'])) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jumalh Masuk</th>
                            <td><?= $d['jumlah_masuk'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tahun Perolehan</th>
                            <td><?= $d['tahun_perolehan'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Satuan</th>
                            <td><?= $d['nama_satuan'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kategori</th>
                            <td><?= $d['nama_kategori'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Gambar</th>
                            <td>
                                <img src="<?= $d['image'] ?>" alt="Gambar gagal diload" class="img-fluid">
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
<?php
} else { ?>

    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <h1>
                    <center>Data Tidak Ditemukan!</center>
                </h1>
            </div>
        </div>
    </div>

<?php } ?>