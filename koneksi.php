<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "pro");

$conn= mysqli_connect(HOST, USER, PASS, DB) OR DIE("Database tidak bisa kehubung");
?>