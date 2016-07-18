<?php
    include 'classes/stdlib.php';

    $site = new csite();

    // this is a function specific to this site!
    initialise_site($site);

    $page = new cpage("Home page");
    $site->setPage($page);
    
    $content = "Home content";
    $page->setContent($content);

    $site->render();
?>