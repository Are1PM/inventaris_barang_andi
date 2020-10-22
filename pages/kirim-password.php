<?php
if (isset($_POST['simpan'])) {
    // Data
    $dt = cariUserLogin($_SESSION['id']);

    if ($dt['password'] == $_POST['password_lama']) {

        if (ubahPassword($_POST)) {
            $_SESSION['pesan']['status'] = 1;
        } else {
            $_SESSION['pesan']['status'] = 0;
        }
        $_SESSION['pesan']['isi'] = "diubah";
    } else {
        $_SESSION['pesan']['status'] = 0;
        $_SESSION['pesan']['isi'] = 'diubah';
        $_SESSION['pesan']['pass_isi'] = 'Password lama yang anda masukkan salah!';
    }
}
header('Location:index.php?page=ubah-' . $GLOBALS['currentRoute']);
