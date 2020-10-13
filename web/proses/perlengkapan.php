<?php

// ========================================================
// ======= BARANG =========================================
// ========================================================

function lihatBarang()
{
    global $Open;
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($Open, $sql);

    return $query;
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


// ========================================================
// ======= PRODI ==========================================
// ========================================================

function lihatProdi()
{
    return "lihat Prodi";
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
    return "lihat Kategori";
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
    return "lihat Ruangan";
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
    return "lihat Satuan";
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
    return "lihat UserProdi";
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
    return "lihat Pegawai";
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
