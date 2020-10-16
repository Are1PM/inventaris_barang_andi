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

function tambahBarang()
{
    return "tambah barang";
}

function ubahBarang()
{
    return "ubah barang";
}

function hapusBarang()
{
    return "hapus barang";
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

    return $query;
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

function hapusProdi()
{
    return "hapus Prodi";
}


// ========================================================
// ======= KATEGORI =======================================
// ========================================================

function lihatKategori()
{
    global $Open;
    $sql = "SELECT * FROM kategori";
    $query = mysqli_query($Open, $sql);

    return $query;
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

function hapusKategori()
{
    return "hapus Kategori";
}


// ========================================================
// ======= RUANGAN ========================================
// ========================================================

function lihatRuangan()
{
    global $Open;
    $sql = "SELECT * FROM ruangan";
    $query = mysqli_query($Open, $sql);

    return $query;
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

function hapusRuangan()
{
    return "hapus Ruangan";
}


// ========================================================
// ======= SATUAN =========================================
// ========================================================

function lihatSatuan()
{
    global $Open;
    $sql = "SELECT * FROM satuan";
    $query = mysqli_query($Open, $sql);

    return $query;
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

function hapusSatuan()
{
    return "hapus Satuan";
}


// ========================================================
// ======= USER PRODI =====================================
// ========================================================

function lihatUserProdi()
{
    global $Open;
    $sql = "SELECT * FROM user_prodi up, prodi p WHERE up.id_prodi=p.id_prodi";
    $query = mysqli_query($Open, $sql);

    return $query;
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

function hapusUserProdi()
{
    return "hapus UserProdi";
}


// ========================================================
// ======= PEGAWAI ========================================
// ========================================================

function lihatPegawai()
{
    global $Open;
    $sql = "SELECT * FROM pegawai";
    $query = mysqli_query($Open, $sql);

    return $query;
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

function hapusPegawai()
{
    return "hapus Pegawai";
}
