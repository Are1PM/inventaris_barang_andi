<?php
function keluar()
{
    if (isset($_SESSION['akses'])) {
        unset($_SESSION);
        session_destroy();
    }
}
