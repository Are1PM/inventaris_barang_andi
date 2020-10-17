<?php
if (isset($_POST['kirim'])) {
    if (hapusUserProdi($_POST)) {
        $_SESSION['pesan']['status'] = 1;
    } else {
        $_SESSION['pesan']['status'] = 0;
    }
    $_SESSION['pesan']['isi'] = "dihapus";
}
header('Location:index.php?page=lihat-' . $GLOBALS['currentRoute']);
