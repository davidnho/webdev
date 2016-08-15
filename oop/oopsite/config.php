<?php

Class Config {
    public $title = '';
    function setTitle($pagetitle){
        $this->title = $pagetitle;
    }
    function getTitle(){
        return $this->title;
    }
    function setFooter(){
        include('footer.php');
    }
    
    function getHeader(){
        include('header.php');
    }
} 

?>