<?php
$data = mysqli_fetch_all(lihatRuangan(), MYSQLI_ASSOC);
$no = 1;
?>
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Prodi </h2>

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
                                    <th>Nama Ruangan</th>
                                    <th width="27%">Aksi</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php foreach ($data as $k => $d) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $d['nama_ruangan'] ?></td>
                                        <td>
                                            <a class="btn btn-warning btn-sm mr-1">
                                                <i class="fa fa-eye"></i> Detail
                                            </a>
                                            <a class="btn btn-primary btn-sm mr-1">
                                                <i class="fa fa-edit"></i> Ubah
                                            </a>
                                            <a class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Hapus
                                            </a></td>
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