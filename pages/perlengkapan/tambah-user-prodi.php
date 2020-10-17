<?php
$idRoute = $GLOBALS['currentRoute'];
$judul = "Tambah " . ucfirst($idRoute);

// Data
$dt_prodi = lihatProdi();
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
                    <h2>Form <?= $judul ?></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" action="index.php?page=kirim-<?= $idRoute ?>" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        <!-- Username Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="username" name="username" required="required" class="form-control">
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" id="password" name="password" required="required" class="form-control">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align " for="id_prodi">Prodi</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select id="id_prodi" name="id_prodi" class="form-control">
                                    <option value=""> - Pilih Prodi - </option>
                                    <?php foreach ($dt_prodi as $dt) : ?>
                                        <option value=<?= $dt['id_prodi'] ?>><?= $dt['nama_prodi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="?page=lihat-<?= $idRoute ?>" class="btn btn-warning" type="button">Cancel</a>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success" name="kirim">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>