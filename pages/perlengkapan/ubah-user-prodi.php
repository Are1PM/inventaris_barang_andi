<?php
$idRoute = explode('&', $GLOBALS['currentRoute'])[0];
$judul = "Ubah " . ucfirst($idRoute);

// Data
$dt = cariUserProdi($_GET['id']);
$dt_prodi = lihatProdi();
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

                        <!-- id_user_prodi Input-->

                        <input type="hidden" id="id_user_prodi" name="id_user_prodi" required="required" class="form-control" value="<?= $dt['id_user_prodi'] ?>" readonly>


                        <!-- Username Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="username" name="username" required="required" class="form-control" value="<?= $dt['username'] ?>">
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" id="password" name="password" required="required" class="form-control" value="<?= $dt['password'] ?>">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align " for="id_prodi">Prodi</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select id="id_prodi" name="id_prodi" class="form-control">
                                    <option value=""> - Pilih Prodi - </option>
                                    <?php foreach ($dt_prodi as $dtp) : ?>
                                        <option value="<?= $dtp['id_prodi'] ?>" <?= ($dt['id_prodi'] == $dtp['id_prodi']) ? "selected" : "" ?>><?= $dtp['nama_prodi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
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