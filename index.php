<?php
require_once "web/autoload.php";

foreach ($constanta as $k => $path) {
    define($k, dirname(__FILE__) . $path);
}

require_once "layout/load.php";
