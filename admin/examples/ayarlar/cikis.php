<?php

session_start();

$_SESSION = array();
session_destroy();


header("Location: http://lolquery.codingtr.com/admin/");

?>
