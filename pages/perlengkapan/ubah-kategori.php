<?php
$idRoute = explode('&', $GLOBALS['currentRoute'])[0];
$judul = "Ubah " . ucfirst($idRoute);

// Data
$dt = cariKategori($_GET['id']);
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
                    <h2>Form <?= $judul ?></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" action="index.php?page=kirim-<?= $idRoute ?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                        <!-- id_kategori Input-->

                        <input type="hidden" id="id_kategori" name="id_kategori" required="required" class="form-control" value="<?= $dt['id_kategori'] ?>" readonly>


                        <!-- Nama Kategori Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_kategori">Nama Kategori <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="nama_kategori" name="nama_kategori" required="required" class="form-control" value="<?= $dt['nama_kategori'] ?>">
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="?page=lihat-<?= $idRoute ?>" class="btn btn-warning" type="button">Cancel</a>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success" name="simpan">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>