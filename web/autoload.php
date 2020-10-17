<?php
session_start();

foreach (glob('web/auth/*.php') as $filename) {
    include_once $filename;
}

foreach (glob('web/config/*.php') as $filename) {
    include_once $filename;
}

if (isset($_SESSION['username'])) {
    if ($_SESSION['akses'] == "perlengkapan") {
        include_once 'web/proses/perlengkapan.php';
    } elseif ($_SESSION['akses'] == "pegawai") {
        include_once 'web/proses/pegawai.php';
    } elseif ($_SESSION['akses'] == "prodi") {
        include_once 'web/proses/prodi.php';
    }
}

include_once "routes.php";
