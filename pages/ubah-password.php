<?php
$idRoute = explode('&', $GLOBALS['currentRoute'])[0];
$judul = "Ubah " . ucfirst($idRoute);

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
                    <?php if (isset($_SESSION['pesan']['pass_isi'])) : ?>
                        <div class="alert alert-danger alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <?= $_SESSION['pesan']['pass_isi'] ?>
                        </div>
                    <?php
                        unset($_SESSION['pesan']['pass_isi']);
                    endif;
                    ?>
                    <!-- $_SESSION['pesan']['pass_status'] -->
                    <br />
                    <form id="demo-form2" action="index.php?page=kirim-<?= $idRoute ?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                        <!-- Password Lama Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password_lama">Password Lama <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" id="password_lama" name="password_lama" required="required" data-parsley-required-message="Password lama wajib diisi!" class="form-control">
                            </div>
                        </div>

                        <!-- Password Baru Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password_baru">Password Baru <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" id="password_baru" name="password_baru" data-parsley-required-message="Password Baru wajib diisi!" required="required" class="form-control">
                            </div>
                        </div>

                        <!-- Confirm Password Baru Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="confirm_password">Konfirmasi Password Baru <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" id="confirm_password" name="confirm_password" data-parsley-required-message="Konfirmasi Password Baru wajib diisi!" required="required" data-parsley-equalto-message="Konfirmasi Password Baru tidak sama!" data-parsley-equalto="#password_baru" class="form-control">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
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