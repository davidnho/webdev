<?php

session_start();

/* @var $_SESSION type */
echo "Hi " . $_SESSION['username'];
echo "Hi " . $_POST['username'];
?>