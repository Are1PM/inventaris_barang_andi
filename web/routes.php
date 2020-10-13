<?php
function routes($get)
{
    $req = explode("/", $_SERVER['REQUEST_URI']);

    $file_request = end($req);

    // Default path page  ======> lokasi : page/
    $path = PAGES;
    //  Default aksi
    $aksi = "login";
    // Nama file page not found   ===> lokasi : pages/nama_file.php
    $NotFound = PAGES . '404.php';

    // Ambil Route
    $route = (isset($get['page'])) ? $get['page'] : "/";

    // =============================================================
    //  === Set User Path ==========================================
    // =============================================================

    if (isset($_SESSION['username']) && isset($_SESSION['akses'])) {
        $file = $_SESSION['akses'] . "/" . $route;

        // Agar tidak not found saat file index.php tanpa parameter
        if ($route === "") {
            $file .= "beranda.php";

            // Agar tidak not found saat file index.php tanpa parameter
        } elseif (in_array($file_request, ["index.php", ""])) {
            $file .= "beranda.php";

            // Menamai file sesuai route
        } else {
            $file .= ".php";
        }

        $path .= $file;

        if (file_exists($path)) {
            return $path;
        } else {
            $aksi = "";
        }
    }

    // =============================================================
    //  === Jika Tidak Login =======================================
    // =============================================================
    switch ($aksi) {
        case 'export-stok-pdf':
            echo "<script language=\"JavaScript\">
                    document.location='export.php?file=stok-pdf';
                    </script>";
            break;
        case 'login':
            $path .= 'login.php';
            break;
        default:
            return $NotFound;
            break;
    }


    return $path;
}
