<?php
function routes($page)
{
    $result = PAGE . "/cek/cek.php";
    return $result;
}

// $page = (isset($_GET['page'])) ? $_GET['page'] : "main";
// switch ($page) {
//     case 'beranda':
//         include 'beranda.php';
//         break;
//     case 'lihat-data-user-prodi':
//         include "lihat-data-user-prodi.php";
//         break;
//     case 'form-input-data-user-prodi':
//         include "form-input-data-user-prodi.php";
//         break;
//     case 'input-data-user-prodi':
//         include "input-data-user-prodi.php";
//         break;
//     case 'edit-data-user-prodi':
//         include "edit-data-user-prodi.php";
//         break;
//     case 'delete-data-user-prodi':
//         include "delete-data-user-prodi.php";
//         break;
//     case 'delete-data-stok-barang':
//         include "delete-stok-barang.php";
//         break;
//     case 'edit-data-stok-barang':
//         include "edit-stok-barang.php";
//         break;
//     case 'form-input-stok-barang':
//         include "form-input-stok-barang.php";
//         break;
//     case 'input-data-stok-barang':
//         include "input-stok-barang.php";
//         break;
//     case 'lihat-data-stok-barang':
//         include "lihat-stok-barang.php";
//         break;
//     case 'export-stok-pdf':
//         echo "<script language=\"JavaScript\">
//                                     document.location='export.php?file=stok-pdf';
//                                     </script>";
//         break;
//     default:
//         include '../aboutuser.php';
// }
