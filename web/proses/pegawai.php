<?php

// ========================================================
// ======= BARANG =========================================
// ========================================================

function lihatBarang()
{
    global $Open;
    $sql = "SELECT * FROM ambil_barang ab, barang b, prodi p WHERE ab.id_prodi='" . $_SESSION['id'] . "' AND ab.id_prodi=p.id_prodi AND ab.kode_brg=b.kode_brg";
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
    $q = "SELECT nama_brg, jumlah_ambil FROM pakai_barang pb, barang b WHERE ab.kode_brg=b.kode_brg";
    $ambil = mysqli_query($Open, $q);
    $hasil = mysqli_fetch_all($ambil);

    foreach ($hasil as $val) {
        $brg[] = $val[0];
        $jumlah[] = $val[1];
    }

    return [$brg, $jumlah];
}
