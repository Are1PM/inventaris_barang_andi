<?php
session_start();

foreach (glob('web/auth/*.php') as $filename) {
    include_once $filename;
}



foreach (glob('web/config/*.php') as $filename) {
    include_once $filename;
}

include_once "routes.php";
