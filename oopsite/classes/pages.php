<?php

class Pages {

    public $page = array(
        "home" => 'pages/home.php',
        "about" => 'pages/about.php'
    );

    function loadPage($pagename) {
        include 'pages/' . $pagename . '.php';
    }

}
