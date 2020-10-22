<?php
$idRoute = explode('&', $GLOBALS['currentRoute'])[0];
$judul = "Tambah " . ucfirst($idRoute);

// Data
$dt = cariBarang($_GET['id']);
$dt_satuan = lihatSatuan();
$dt_kategori = lihatKategori();
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
                    <form id="demo-form2" action="index.php?page=kirim-<?= $idRoute ?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                        <!-- Kode Barang Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="kode_brg">Kode Barang <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="kode_brg" name="kode_brg" required="required" class="form-control" value="<?= $dt['kode_brg'] ?>" readonly>
                            </div>
                        </div>

                        <!-- Nama Barang Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_brg">Nama Barang <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="nama_brg" name="nama_brg" required="required" class="form-control" value="<?= $dt['nama_brg'] ?>">
                            </div>
                        </div>

                        <!-- No Invetaris Barang Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="no_inventaris">No Inventaris <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="no_inventaris" name="no_inventaris" required="required" class="form-control" value="<?= $dt['no_inventaris'] ?>">
                            </div>
                        </div>

                        <!-- Jenis Barang Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis_brg">Jenis Barang <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="jenis_brg" name="jenis_brg" required="required" class="form-control" value="<?= $dt['jenis_brg'] ?>">
                            </div>
                        </div>

                        <!-- Jumlah Masuk Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="jumlah_masuk">Jumlah Masuk <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" id="jumlah_masuk" name="jumlah_masuk" required="required" class="form-control" value="<?= $dt['jumlah_masuk'] ?>">
                            </div>
                        </div>

                        <!-- Tahun Perolehan Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tahun_perolehan">Tahun Perolehan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" value="<?= $dt['tahun_perolehan'] ?>" id=" tahun_perolehan" name="tahun_perolehan" required="required" class="form-control">
                            </div>
                        </div>

                        <!-- Tanggal Masuk -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Masuk <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="birthday" name="tgl_masuk" class="date-picker form-control" value="<?= $dt['tgl_masuk'] ?>" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align " for="id_satuan">Satuan <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select id="id_satuan" name="id_satuan" class="form-control" required="required">
                                    <option value=""> - Pilih Satuan - </option>
                                    <?php foreach ($dt_satuan as $dts) : ?>
                                        <option value="<?= $dts['id_satuan'] ?>" <?= ($dt['id_satuan'] == $dts['id_satuan']) ? "selected" : "" ?>><?= $dts['nama_satuan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Kategori Input -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align " for="id_kategori">Kategori <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select id="id_kategori" name="id_kategori" class="form-control" required="required">
                                    <option value=""> - Pilih Kategori - </option>
                                    <?php foreach ($dt_kategori as $dtk) : ?>
                                        <option value=<?= $dtk['id_kategori'] ?> <?= ($dt['id_kategori'] == $dtk['id_kategori']) ? "selected" : "" ?>><?= $dtk['nama_kategori'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>


                        <!-- Foto Upload -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align " for="gambar">Gambar</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" name="gambar" id="gambar" accept=".jpg,.jpeg">
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