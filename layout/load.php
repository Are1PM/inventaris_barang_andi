<!DOCTYPE html>
<html lang="en">
<?php require_once "template/head.php"; ?>

<?php if (isset($_SESSION['akses'])) : ?>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">


                <!-- top navigation -->
                <?php require_once "template/menu.php" ?>
                <!-- /top navigation -->
            <?php endif; ?>


            <!-- page content -->
            <?php require_once "template/main.php"; ?>
            <!-- /page content -->

            <?php if (isset($_SESSION['akses'])) : ?>

                <!-- footer -->
                <?php require_once "template/footer.php"; ?>
                <!-- /footer -->
            </div>
        </div>

        <?php require_once "template/script.php"; ?>

    </body>
<?php endif; ?>

</html>