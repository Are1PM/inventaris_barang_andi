<?php

// ========================================================
// ======= BARANG =========================================
// ========================================================

function lihatBarang()
{
    global $Open;
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $hasil;
}

function cariBarang($kode_barang)
{
    global $Open;
    $kode_barang = htmlspecialchars($kode_barang);

    $sql = "SELECT * FROM barang b, satuan s, kategori k WHERE kode_brg='$kode_barang' AND b.id_satuan=s.id_satuan AND b.id_kategori=k.id_kategori";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_assoc($query);

    return $hasil;
}

function tambahBarang($data, $file)
{
    global $Open;

    $kode_barang = $data['kode_brg'];
    $nama_barang = $data['nama_brg'];
    $no_inventaris = $data['no_inventaris'];
    $jenis_barang = $data['jenis_brg'];
    $tanggal_masuk = $data['tgl_masuk'];
    $jumlah_masuk = $data['jumlah_masuk'];
    $jumlah_keluar = 0;
    $tahun_perolehan = $data['tahun_perolehan'];
    $id_satuan = $data['id_satuan'];
    $id_kategori = $data['id_kategori'];

    $type = explode('/', $file['gambar']['type']);
    $ukuran = $file['gambar']['size'];
    $gambar =  "images/uploads/" . $kode_barang . "_" . time() . "." . end($type);

    $sql = "
    INSERT INTO barang
    VALUES (
        '$kode_barang',
        '$nama_barang',
        '$no_inventaris',
        '$jenis_barang',
        '$tanggal_masuk',
        '$jumlah_masuk',
        '$jumlah_keluar',
        '$tahun_perolehan',
        '$id_satuan',
        '$id_kategori',
        '$gambar'
    )
    ";
    mysqli_begin_transaction($Open, MYSQLI_TRANS_START_READ_WRITE);

    mysqli_query($Open, $sql);

    // Cek Photo
    if ($ukuran > 0) {
        //upload Photo
        if (is_uploaded_file($file['gambar']['tmp_name'])) {

            if (move_uploaded_file($file['gambar']['tmp_name'], $gambar)) {
                mysqli_commit($Open);
            } else {
                mysqli_rollback($Open);
                return false;
            }
        }
    }

    return true;
}

function ubahBarang($data, $file)
{
    global $Open;

    $kode_barang = $data['kode_brg'];
    $nama_barang = $data['nama_brg'];
    $no_inventaris = $data['no_inventaris'];
    $jenis_barang = $data['jenis_brg'];
    $tanggal_masuk = $data['tgl_masuk'];
    $jumlah_masuk = $data['jumlah_masuk'];
    $jumlah_keluar = 0;
    $tahun_perolehan = $data['tahun_perolehan'];
    $id_satuan = $data['id_satuan'];
    $id_kategori = $data['id_kategori'];

    $type = explode('/', $file['gambar']['type']);
    $ukuran = $file['gambar']['size'];
    $gambar =  "images/uploads/" . $kode_barang . "_" . time() . "." . end($type);

    $dt_lama = cariBarang($kode_barang);
    if ($file['gambar']['size'] > 0) {
        unlink($dt_lama['image']);
    } else {
        $gambar = $dt_lama['image'];
    }

    $sql = "
    UPDATE barang SET
    nama_brg='$nama_barang',
    no_inventaris='$no_inventaris',
    jenis_brg='$jenis_barang',
    tgl_masuk='$tanggal_masuk',
    jumlah_masuk='$jumlah_masuk',
    jumlah_keluar='$jumlah_keluar',
    tahun_perolehan='$tahun_perolehan',
    id_satuan='$id_satuan',
    id_kategori='$id_kategori',
    image='$gambar'
    WHERE
    kode_brg='$kode_barang'
    ";
    mysqli_begin_transaction($Open, MYSQLI_TRANS_START_READ_WRITE);

    mysqli_query($Open, $sql);

    // Cek Photo
    if ($ukuran > 0) {
        //upload Photo
        if (is_uploaded_file($file['gambar']['tmp_name'])) {

            if (move_uploaded_file($file['gambar']['tmp_name'], $gambar)) {
                mysqli_commit($Open);
            } else {
                mysqli_rollback($Open);
                return false;
            }
        }
    }

    mysqli_commit($Open);
    return true;
}

function hapusBarang($data)
{
    global $Open;

    $id = $data['id'];

    $sql = "
    DELETE FROM barang
    WHERE
        kode_brg = '$id'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function grafikBarang()
{
    global $Open;
    $q = "SELECT nama_brg, jumlah_masuk FROM `barang`";
    $ambil = mysqli_query($Open, $q);
    $hasil = mysqli_fetch_all($ambil);

    foreach ($hasil as $val) {
        $brg[] = $val[0];
        $jumlah[] = $val[1];
    }

    return [$brg, $jumlah];
}


// ========================================================
// ======= PRODI ==========================================
// ========================================================

function lihatProdi()
{
    global $Open;
    $sql = "SELECT * FROM prodi";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $hasil;
}

function cariProdi($id_prodi)
{
    global $Open;
    $id_prodi = htmlspecialchars($id_prodi);

    $sql = "SELECT * FROM prodi WHERE id_prodi='$id_prodi'";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_assoc($query);

    return $hasil;
}

function tambahProdi($data)
{
    global $Open;

    $nama_prodi = $data['nama_prodi'];

    $sql = "
    INSERT INTO prodi
    VALUES (
        null,
        '$nama_prodi'
       
    )
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function ubahProdi($data)
{
    global $Open;

    $id_prodi = $data['id_prodi'];
    $nama_prodi = $data['nama_prodi'];

    $sql = "
    UPDATE
        prodi
    SET
        nama_prodi='$nama_prodi'
    WHERE
        id_prodi='$id_prodi'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function hapusProdi($data)
{
    global $Open;

    $id = $data['id'];

    $sql = "
    DELETE FROM prodi
    WHERE
        id_prodi = '$id'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}


// ========================================================
// ======= KATEGORI =======================================
// ========================================================

function lihatKategori()
{
    global $Open;
    $sql = "SELECT * FROM kategori";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $hasil;
}

function cariKategori($id_kategori)
{
    global $Open;
    $id_kategori = htmlspecialchars($id_kategori);

    $sql = "SELECT * FROM kategori WHERE id_kategori='$id_kategori'";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_assoc($query);

    return $hasil;
}

function tambahKategori($data)
{
    global $Open;

    $nama_kategori = $data['nama_kategori'];

    $sql = "
    INSERT INTO kategori
    VALUES (
        null,
        '$nama_kategori'
       
    )
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function ubahKategori($data)
{
    global $Open;

    $id_kategori = $data['id_kategori'];
    $nama_kategori = $data['nama_kategori'];

    $sql = "
    UPDATE
        kategori
    SET
        nama_kategori='$nama_kategori'
       
    WHERE
        id_kategori='$id_kategori'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function hapusKategori($data)
{
    global $Open;

    $id = $data['id'];

    $sql = "
    DELETE FROM kategori
    WHERE
        id_kategori = '$id'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}


// ========================================================
// ======= RUANGAN ========================================
// ========================================================

function lihatRuangan()
{
    global $Open;
    $sql = "SELECT * FROM ruangan";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $hasil;
}

function cariRuangan($id_ruangan)
{
    global $Open;
    $id_ruangan = htmlspecialchars($id_ruangan);

    $sql = "SELECT * FROM ruangan WHERE id_ruangan='$id_ruangan'";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_assoc($query);

    return $hasil;
}

function tambahRuangan($data)
{
    global $Open;

    $nama_ruangan = $data['nama_ruangan'];
    $pj = $data['pj'];

    $sql = "
    INSERT INTO ruangan
    VALUES (
        null,
        '$nama_ruangan',
        '$pj'
    )
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function ubahRuangan($data)
{
    global $Open;

    $id_ruangan = $data['id_ruangan'];
    $nama_ruangan = $data['nama_ruangan'];
    $pj = $data['pj'];

    $sql = "
    UPDATE 
        ruangan
    SET
        nama_ruangan='$nama_ruangan',
        pj='$pj'
    WHERE
        id_ruangan='$id_ruangan'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function hapusRuangan($data)
{
    global $Open;

    $id = $data['id'];

    $sql = "
    DELETE FROM ruangan
    WHERE
        id_ruangan = '$id'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}


// ========================================================
// ======= SATUAN =========================================
// ========================================================

function lihatSatuan()
{
    global $Open;
    $sql = "SELECT * FROM satuan";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $hasil;
}

function cariSatuan($id_satuan)
{
    global $Open;
    $id_satuan = htmlspecialchars($id_satuan);

    $sql = "SELECT * FROM satuan WHERE id_satuan='$id_satuan'";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_assoc($query);

    return $hasil;
}

function tambahSatuan($data)
{
    global $Open;

    $nama_satuan = $data['nama_satuan'];

    $sql = "
    INSERT INTO satuan
    VALUES (
        null,
        '$nama_satuan'
       
    )
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function ubahSatuan($data)
{
    global $Open;

    $id_satuan = $data['id_satuan'];
    $nama_satuan = $data['nama_satuan'];

    $sql = "
    UPDATE
        satuan
    SET
        nama_satuan='$nama_satuan'
    WHERE
        id_satuan='$id_satuan'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function hapusSatuan($data)
{
    global $Open;

    $id = $data['id'];

    $sql = "
    DELETE FROM satuan
    WHERE
        id_satuan = '$id'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}


// ========================================================
// ======= USER PRODI =====================================
// ========================================================

function lihatUserProdi()
{
    global $Open;
    $sql = "SELECT * FROM user_prodi up, prodi p WHERE up.id_prodi=p.id_prodi";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $hasil;
}

function cariUserProdi($id_user_prodi)
{
    global $Open;
    $id_user_prodi = htmlspecialchars($id_user_prodi);

    $sql = "SELECT * FROM user_prodi up, prodi p WHERE id_user_prodi='$id_user_prodi' AND up.id_prodi=p.id_prodi";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_assoc($query);

    return $hasil;
}

function tambahUserProdi($data)
{
    global $Open;

    $username = $data['username'];
    $password = $data['password'];
    $id_prodi = $data['id_prodi'];


    $sql = "
    INSERT INTO user_prodi
    VALUES (
        null,
        '$username',
        '$password',
        '$id_prodi'
    )
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function ubahUserProdi($data)
{
    global $Open;

    $id_user_prodi = $data['id_user_prodi'];
    $username = $data['username'];
    $password = $data['password'];
    $id_prodi = $data['id_prodi'];


    $sql = "
    UPDATE 
        user_prodi
    SET
        username='$username',
        password='$password',
        id_prodi='$id_prodi'
    WHERE
        id_user_prodi='$id_user_prodi'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function hapusUserProdi($data)
{
    global $Open;

    $id = $data['id'];

    $sql = "
    DELETE FROM user_prodi
    WHERE
        id_user_prodi = '$id'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}


// ========================================================
// ======= PEGAWAI ========================================
// ========================================================

function lihatPegawai()
{
    global $Open;
    $sql = "SELECT * FROM pegawai";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $hasil;
}

function cariPegawai($id_pegawai)
{
    global $Open;
    $id_pegawai = htmlspecialchars($id_pegawai);

    $sql = "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_assoc($query);

    return $hasil;
}

function tambahPegawai($data)
{
    global $Open;

    $nip_nidn = $data['nip_nidn'];
    $nama_pegawai = $data['nama_pegawai'];
    $jabatan = $data['jabatan'];


    $sql = "
    INSERT INTO pegawai
    VALUES (
        null,
        '$nip_nidn',
        '$nama_pegawai',
        '$jabatan'
    )
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function ubahPegawai($data)
{
    global $Open;

    $id_pegawai = $data['id_pegawai'];
    $nip_nidn = $data['nip_nidn'];
    $nama_pegawai = $data['nama_pegawai'];
    $jabatan = $data['jabatan'];

    $sql = "
    UPDATE
        pegawai
    SET
        nip_nid='$nip_nidn',
        nama_pegawai='$nama_pegawai',
        jabatan='$jabatan'
    WHERE
        id_pegawai='$id_pegawai'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function hapusPegawai($data)
{
    global $Open;

    $id = $data['id'];

    $sql = "
    DELETE FROM pegawai
    WHERE
        id_pegawai = '$id'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}


// ========================================================
// ======= GANTI PASSWORD =================================
// ========================================================

function cariUserLogin($id_user_perlengkapan)
{
    global $Open;
    $id_user_perlengkapan = htmlspecialchars($id_user_perlengkapan);

    $sql = "SELECT * FROM user_perlengkapan WHERE id_user_perlengkapan='$id_user_perlengkapan'";
    $query = mysqli_query($Open, $sql);
    $hasil = mysqli_fetch_assoc($query);

    return $hasil;
}
function ubahPassword($data)
{
    global $Open;

    $id_user_perlengkapan = $_SESSION['id'];
    $password_baru = $data['password_baru'];

    $sql = "
    UPDATE
        user_perlengkapan
    SET
        password='$password_baru'
    WHERE
        id_user_perlengkapan='$id_user_perlengkapan'
    ";

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}
