<?php
$idRoute = explode("&", $GLOBALS['currentRoute'])[0];

$d = cariProdi($_GET['id']);
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
                            <th scope="row" width="30%">Nama Prodi</th>
                            <td><?= $d['nama_prodi'] ?></td>
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