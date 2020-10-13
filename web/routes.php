<?php
function routes($get)
{
    $result = PAGES . "/";
    $page = (isset($get['page'])) ? $get['page'] : "/";

    switch ($page) {
        case 'beranda':
            $result .= 'beranda.php';
            break;
        case 'lihat-data-user-prodi':
            $result .= "lihat-data-user-prodi.php";
            break;
        case 'form-input-data-user-prodi':
            $result .= "form-input-data-user-prodi.php";
            break;
        case 'input-data-user-prodi':
            $result .= "input-data-user-prodi.php";
            break;
        case 'edit-data-user-prodi':
            $result .= "edit-data-user-prodi.php";
            break;
        case 'delete-data-user-prodi':
            $result .= "delete-data-user-prodi.php";
            break;
        case 'delete-data-stok-barang':
            $result .= "delete-stok-barang.php";
            break;
        case 'edit-data-stok-barang':
            $result .= "edit-stok-barang.php";
            break;
        case 'form-input-stok-barang':
            $result .= "form-input-stok-barang.php";
            break;
        case 'input-data-stok-barang':
            $result .= "input-stok-barang.php";
            break;
        case 'lihat-data-stok-barang':
            $result .= "lihat-stok-barang.php";
            break;
        case 'export-stok-pdf':
            echo "<script language=\"JavaScript\">
                                        document.location='export.php?file=stok-pdf';
                                        </script>";
            break;
        default:
            $result .= 'default.php';
    }
    return $result;
}
