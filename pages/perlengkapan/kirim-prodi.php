<?php
if (isset($_POST['kirim'])) {
    if (tambahProdi($_POST)) {
        $_SESSION['pesan']['status'] = 1;
    } else {
        $_SESSION['pesan']['status'] = 0;
    }
    $_SESSION['pesan']['isi'] = "ditambahkan";
} elseif (isset($_POST['simpan'])) {
    if (ubahProdi($_POST)) {
        $_SESSION['pesan']['status'] = 1;
    } else {
        $_SESSION['pesan']['status'] = 0;
    }
    $_SESSION['pesan']['isi'] = "diubah";
}
header('Location:index.php?page=lihat-' . $GLOBALS['currentRoute']);
