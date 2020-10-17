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

function cariBarang()
{
    return "cari barang";
}

function tambahBarang($data)
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
    $gambar = 'sdks';

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

    $query = mysqli_query($Open, $sql);

    if (!$query) {
        return false;
    }

    return true;
}

function ubahBarang()
{
    return "ubah barang";
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

function cariProdi()
{
    return "cari Prodi";
}

function tambahProdi()
{
    return "tambah Prodi";
}

function ubahProdi()
{
    return "ubah Prodi";
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

function cariKategori()
{
    return "cari Kategori";
}

function tambahKategori()
{
    return "tambah Kategori";
}

function ubahKategori()
{
    return "ubah Kategori";
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

function cariRuangan()
{
    return "cari Ruangan";
}

function tambahRuangan()
{
    return "tambah Ruangan";
}

function ubahRuangan()
{
    return "ubah Ruangan";
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

function cariSatuan()
{
    return "cari Satuan";
}

function tambahSatuan()
{
    return "tambah Satuan";
}

function ubahSatuan()
{
    return "ubah Satuan";
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

function cariUserProdi()
{
    return "cari UserProdi";
}

function tambahUserProdi()
{
    return "tambah UserProdi";
}

function ubahUserProdi()
{
    return "ubah UserProdi";
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

function cariPegawai()
{
    return "cari Pegawai";
}

function tambahPegawai()
{
    return "tambah Pegawai";
}

function ubahPegawai()
{
    return "ubah Pegawai";
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
