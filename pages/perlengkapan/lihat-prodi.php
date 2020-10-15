<?php
$data = mysqli_fetch_all(lihatProdi(), MYSQLI_ASSOC);
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
                                    <th>Nama Prodi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php foreach ($data as $k => $d) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $d['nama_prodi'] ?></td>
                                        <td>Aksi</td>
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