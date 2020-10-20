<?php
if (isset($_POST['kirim'])) {
    if (tambahBarang($_POST, $_FILES)) {
        $_SESSION['pesan']['status'] = 1;
    } else {
        $_SESSION['pesan']['status'] = 0;
    }
    $_SESSION['pesan']['isi'] = "ditambahkan";
} elseif (isset($_POST['simpan'])) {
    if (ubahBarang($_POST, $_FILES)) {
        $_SESSION['pesan']['status'] = 1;
    } else {
        $_SESSION['pesan']['status'] = 0;
    }
    $_SESSION['pesan']['isi'] = "diubah";
}

header('Location:index.php?page=lihat-' . $GLOBALS['currentRoute']);
