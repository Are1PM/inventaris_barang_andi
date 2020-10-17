<div class="right_col" role="main">

    <?php
    if (isset($_SESSION['pesan']['status'])) {
        if ($_SESSION['pesan']['status'] == 1) {
            echo "<script>
        function notifikasi(){            
            new PNotify({
                title: 'Sukses',
                text: 'Data berhasil " . $_SESSION['pesan']['isi'] . "!',
                type: 'success',
                styling: 'bootstrap3'
              });
        }
          </script>";
        } elseif ($_SESSION['pesan']['status'] == 0) {
            echo "<script>
        function notifikasi(){ 
            new PNotify({
                title: 'Gagal',
                text: 'Data gagal " . $_SESSION['pesan']['isi'] . "!',
                type: 'error',
                styling: 'bootstrap3'
              });
            }
          </script>";
        }
        $_SESSION['pesan']['status'] = 3;
    } ?>

    <?php include routes($_GET); ?>

</div>