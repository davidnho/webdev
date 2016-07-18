<?php

function __autoload($class) {
    include "$class.php";
}

function initialise_site(csite $site) {
    $site->addHeader("pages/header.php");
    $site->addHeader("pages/styles.php");
    $site->addHeader("pages/scripts.php");
    $site->addHeader("pages/navigation.php");
//        $site->addHeader("pages/container.php");
    $site->addFooter("pages/footer.php");
}

?>