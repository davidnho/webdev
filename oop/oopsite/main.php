<?php
 require_once('config.php');
 $c = new Config();
 $c->setTitle('Main');
 echo "<h1>". $c->getTitle() ."</h1>";
 echo $c->getHeader();
 echo "<h4>This is the body</h4>";
 $c->setFooter();
?>