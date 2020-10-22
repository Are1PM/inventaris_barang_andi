<?php
$idRoute = $GLOBALS['currentRoute'];
$judul = "User Prodi";

$data = lihatUserProdi();
$no = 1;
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?= $judul; ?></h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <a href="?page=tambah-<?= $idRoute ?>" class="btn btn-success text-dark">
                        <i class="fa fa-plus"></i> Tambah
                    </a>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Prodi</th>
                                            <th width="27%">Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php foreach ($data as $k => $d) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['username'] ?></td>
                                                <td><?= $d['password'] ?></td>
                                                <td><?= $d['nama_prodi'] ?></td>
                                                <td>
                                                    <a href="?page=detail-<?= $idRoute . "&id=" . $d['id_user_prodi'] ?>">
                                                        <button type="button" class="btn btn-warning btn-sm mr-1 ">
                                                            <i class="fa fa-eye"></i> Detail
                                                        </button>
                                                    </a>
                                                    <a href="?page=ubah-<?= $idRoute . "&id=" . $d['id_user_prodi'] ?>">
                                                        <button type="button" class="btn btn-primary btn-sm mr-1">
                                                            <i class="fa fa-edit"></i> Ubah
                                                        </button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm button-hapus" data-toggle="modal" data-target=".modal-hapus" data-id="<?= $d['id_user_prodi'] ?>">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>