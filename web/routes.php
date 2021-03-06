<?php
function routes($get)
{
    // print_r($_SERVER);
    // die;
    $req = explode("/", $_SERVER['REQUEST_URI']);
    $rt = explode("-", end($req));


    if (count($rt) > 2) {
        $out = array_splice($rt, 1);
        $GLOBALS['currentRoute'] = implode("-", $out);
    } else {
        $GLOBALS['currentRoute'] = end($rt);
    }

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
        $file = $path . $_SESSION['akses'] . "/" . $route;

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


        if (file_exists($file)) {

            return $file;
        } else {
            $aksi = ($route == 'login') ? "" : $route;
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
        case 'ubah-password':
            $path .= $aksi . '.php';
            break;
        case 'kirim-password':
            $path .= $aksi . '.php';
            break;
        case 'logout':
            $path .= 'logout.php';
            break;
        default:
            return $NotFound;
            break;
    }

    return $path;
}
