<?php
if (isset($_POST['login-proses'])) {
    $data = $_POST;

    $user = $data['username'];
    $password = $data['password'];
    $akses = $data['akses'];
    $op = $data['op'];

    if ($op == "in") {
        if ($akses == "perlengkapan") {
            $sql = mysqli_query($Open, "SELECT * FROM user_perlengkapan  WHERE username='$user' AND password='$password'");
        } else if ($akses == "prodi") {
            $sql = mysqli_query($Open, "SELECT * FROM user_prodi WHERE username='$user' AND password='$password'");
        } else if ($akses == "pegawai") {
            $sql = mysqli_query($Open, "SELECT * FROM pegawai  WHERE nip_nid='$user' AND password='$password'");
        } else {
?>
            <script language="JavaScript">
                alert('Hak akses tidak sesuai. Silahkan diulang kembali!');
                document.location = 'index.php';
            </script>
        <?php
        }

        if (mysqli_num_rows($sql) == 1) { //jika berhasil akan bernilai 1
            $qry = mysqli_fetch_array($sql);

            if ($akses == "pegawai") {
                $_SESSION['username'] = $qry['nip_nid'];
                $_SESSION['nama_pegawai'] = $qry['nama_pegawai'];
            } else {
                $_SESSION['username'] = $qry['username'];
            }

            $_SESSION['akses'] = $akses;

            if ($akses == "perlengkapan") {
                $_SESSION['id'] = $qry['id_user_perlengkapan'];
                // header("location:user_perlengkapan/home_perlengkapan.php");
            } else if ($akses == "prodi") {
                $_SESSION['id'] = $qry['id_user_prodi'];
                // header("location:user_prodi/home_prodi.php");
            } else if ($akses == "pegawai") {
                $_SESSION['id'] = $qry['id_pegawai'];
                // header("location:pegawai/home_pegawai.php");
            }
        } else {
        ?>
            <script language="JavaScript">
                alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
                document.location = 'index.php';
            </script>
<?php
        }
    } else if ($op == "out") {
        unset($_SESSION['user']);
        unset($_SESSION['level']);
        header("location:index.php");
    }
}
// $_SESSION['id'] = 1;
// $_SESSION['username'] = "arwan";

// // $_SESSION['akses'] = "prodi";
// // $_SESSION['akses'] = "pegawai";
// $_SESSION['akses'] = "perlengkapan";
// session_destroy();

?>