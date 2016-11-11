<?php
session_start();
//var_dump($_SESSION);
//foreach(array_keys($_SESSION) as $k) unset($_SESSION[$k]);
//session_unset();
session_destroy();
header("Location:home.php");
?>