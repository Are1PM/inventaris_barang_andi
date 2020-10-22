<ul class=" navbar-right">
    <li class="nav-item dropdown open" style="padding-left: 15px;">
        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
            <img src="images/user.png" alt=""><?= (isset($_SESSION['username']) ? $_SESSION['username'] : "") ?>
        </a>
        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="?page=ubah-password"><i class="fa fa-key pull-right"></i> Ubah Password</a>
            <a class="dropdown-item" href="?page=logout"><i class="fa fa-sign-out pull-right"></i> Keluar</a>
        </div>
    </li>

</ul>