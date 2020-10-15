<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title">
                <i class="fa fa-paw"></i>
                <span>Inventaris</span>
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= (isset($_SESSION['username']) ? $_SESSION['username'] : "") ?></h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <!-- left navigation -->
        <?php
        if (isset($_SESSION['username']) && isset($_SESSION['akses'])) {
            if ($_SESSION['akses'] == "perlengkapan") {
                include_once LAYOUT . "/menu/left-perlengkapan.php";
            } elseif ($_SESSION['akses'] == "pegawai") {
                include_once LAYOUT . "/menu/left-pegawai.php";
            } else {
                include_once LAYOUT . "/menu/left-prodi.php";
            }
        }
        ?>
        <!-- /left navigation -->
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <?php include_once LAYOUT . "/menu/footer.php" ?>
        <!-- /menu footer buttons -->
    </div>
</div>


<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <!-- top navigation -->
            <?php include_once LAYOUT . "/menu/top.php" ?>
            <!-- /top navigation -->
        </nav>
    </div>
</div>