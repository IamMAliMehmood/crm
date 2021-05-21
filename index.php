<?php
require_once "bootstrap.php";
$isLoggedIn=true;
$type="admin";
if($isLoggedIn) {
    switch($type)
    {
        case "admin":
            require_once "src/views/includes/header-admin.php";
            require_once "src/views/dashboard-admin.php";
            break;
        case "client":
            require_once "src/views/includes/header-client.php";
            require_once "src/views/dashboard-client.php";
            break;
        case "mod":
            require_once "src/views/includes/header-mod.php";
            require_once "src/views/dashboard-mod.php";
            break;
        case "qa":
            require_once "src/views/includes/header-qa.php";
            require_once "src/views/dashboard-qa.php";
            break;
        case "sf":
            require_once "src/views/includes/header-sf.php";
            require_once "src/views/dashboard-sf.php";
            break;
    }
    require_once "src/views/includes/footer.php";
}

