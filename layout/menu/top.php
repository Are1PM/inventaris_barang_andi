<ul class=" navbar-right">
    <li class="nav-item dropdown open" style="padding-left: 15px;">
        <a href="javascript:;" class="user-profile " aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
            <img src="images/user.png" alt=""><?= (isset($_SESSION['username']) ? $_SESSION['username'] : "") ?>
        </a>
    </li>

</ul>